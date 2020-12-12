<?php
    session_start();
    require_once "conexao.php";
    
    $email = $_POST['email'];
	$senha = $_POST['senha'];

    if ($email != '' && $senha != ''){
        $query = "SELECT email, senha, tipo_usuario from usuario where email= :email AND senha=:senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();
        $lista = $stmt->fetch();
        if($email == $lista['email'] && $senha == $lista['senha'])
        {
            $_SESSION['autenticado'] = "SIM";
            $_SESSION['user'] = $lista['tipo_usuario'];
            
            switch($_SESSION['user']){
                case 'adm':
                    header('Location: admin.php');
                break;
                case 'fin':
                    header('Location: financeiro.php');
                break; 
                case 'dir':
                    header('Location: diretoria.php');
                break;  
                case 'sec':
                    header('Location: secretaria.php');
                break; 
                default:
                    $_SESSION['autenticado'] = "NAO";
                    $_SESSION['user'] = "none";
                    header('Location: login.php?login=erro404');
                    break;
            }
        }
        else{
            $_SESSION['autenticado'] = "NAO";
            $_SESSION['user'] = "none";
			header('Location: login.php?login=erro');
		}
    }else{
        $_SESSION['autenticado'] = "NAO";
        $_SESSION['user'] = "none";
		header('Location: login.php?login=erro');
    }
?>