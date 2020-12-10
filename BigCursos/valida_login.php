<?php
    session_start();
    require_once "conexao.php";
    
    $email = $_POST['email'];
	$senha = $_POST['senha'];

    if ($email != '' && $senha != ''){
        $query = "SELECT email, senha, tipo_usuario from usuario where email='$email' AND senha='$senha'";
        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll();
        if($email == $lista[0]['email'] && $senha == $lista[0]['senha'])
        {
            $_SESSION['autenticado'] = "SIM";
            $_SESSION['user'] = $lista[0]['tipo_usuario'];
            
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