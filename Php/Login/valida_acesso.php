<?php
    session_start();
    include("../Sistema/Conexao.class.php");

    $login=$_POST['login'];
    $senha=md5($_POST['senha']);

    $BD= new BancoDeDados();    
    $SQLogin="SELECT * FROM Login1 WHERE Login1='$login' AND Senha='$senha'";
    $Result=mysqli_query($BD->ConectarBanco(),$SQLogin);
    $linha=mysqli_num_rows($Result);
    
    if($linha){
        $_SESSION['nome']=$linha['nome'];
        $_SESSION['senha']=$linha['senha'];
        header('Location: ../Sistema/SistemaGerencia/Gerencia.php');
    }else{
        header('Location: Login.php?erro=1');
    }
?>