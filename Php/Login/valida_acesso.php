<?php
    session_start();
    include("../Sistema/SistemaGerencia/Classes/Conexao.class.php");

    $login=$_POST['login'];
    $senha=md5($_POST['senha']);

    $BD= new BancoDeDados();    
    $SQLogin="SELECT * FROM Login1 WHERE Login1='$login' AND Senha='$senha'";
    $Result=mysqli_query($BD->ConectarBanco(),$SQLogin);
    $linha=mysqli_num_rows($Result);

    if($linha){
        $usuario=mysqli_fetch_assoc($Result);
        $_SESSION['usuarioLogin1']=$usuario['Login1'];
        $_SESSION['usuarioSenha']=$usuario['Senha'];
        header('Location: /Php/Sistema/SistemaGerencia/Gerencia.php');
    }else{
        header('Location: Login.php?erro=1');
    }
?>