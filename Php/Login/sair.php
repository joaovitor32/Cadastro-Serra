<?php
    session_start();
    $_SESSION = array();
    if(session_destroy()){
        unset($_COOKIE['login']);
        unset($_COOKIE['senha']);
        ob_end_flush();
        header('Location: /Php/Login/Login.php');
        exit;
    }else{
        header('Location: /Php/Sistema/SistemaGerencia/Gerencia.php?erro=2');
    }
?>