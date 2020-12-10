<?php
    session_start();
    require_once "conexao.php";
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email != '' && $senha != ''){
        $query = "SELECT email, senha from professor where email='$email' AND senha='$senha'";
        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll();
        if($email == $lista[0]['email'] && $senha == $lista[0]['senha'])
        {
            $_SESSION['autenticado'] = "SIM";
            $_SESSION['user'] = 'prof';
            header('Location: painel_professor.php');
        }
        else{
            $_SESSION['autenticado'] = "NAO";
            $_SESSION['user'] = "none";
			header('Location: portal-professor.php?login=erro');
		}
    }else{
        $_SESSION['autenticado'] = "NAO";
        $_SESSION['user'] = "none";
		header('Location: portal-professor.php?login=erro');
    }
?>