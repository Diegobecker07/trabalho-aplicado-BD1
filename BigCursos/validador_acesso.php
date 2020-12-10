<?php
    session_start();
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
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
            case 'prof':
                header('Location: painel_professor.php');
            break; 
            default:
                $_SESSION['autenticado'] = "NAO";
                $_SESSION['user'] = "none";
                header('Location: login.php?login=erro404');
                break;
        }
        header('Location: login.php?login=erro2');
    }
?>