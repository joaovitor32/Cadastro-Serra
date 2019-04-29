<?php
    session_start();

    $_SESSION = array();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_destroy();
    header('Location: /Php/Login/Login.php');
?>