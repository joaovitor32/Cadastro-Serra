<?php
    include("/home/buzina/Cadastro-Serra/Php/Sistema/Conexao.class.php");
    include("/home/buzina/Cadastro-Serra/Php/Sistema/Membro.class.php");

    $Nome=$_POST['nome'];
    $Curso=$_POST['curso'];
    $AnoEntrada=$_POST['anodeentrada'];
    $Cargo=$_POST['cargo'];
    $Telefone=$_POST['telefone'];
    $CPF=$_POST['cpf'];
    $Foto=$_FILES["foto"]["name"];
    $Rua=$_POST['rua'];
    $Numero=$_POST['numero'];
    $Bairro=$_POST['bairro'];
    $Email=$_POST['email'];
    $Aniversario=$_POST['nascimento'];

    $BD=new BancoDeDados();
    $SQLConsulta="SELECT * FROM Membro WHERE Nome='$Nome'";
    $Retorno=mysqli_query($BD->ConectarBanco(),$SQLConsulta);
    $linhas=mysqli_num_rows($Retorno);
    echo $linhas;
    if($linhas>0){
        //$_SESSION mandar recado que já existe gente cadastrada com esse nome
    }else{
        $Membro=new Membro();
        $Membro->CadastrarMembro($Nome,$Curso,$AnoEntrada,$Cargo,$Telefone,$CPF,$Rua,$Numero,$Bairro,$Email,$Aniversario,$Foto);
    }
    //header("location: /Php/Sistema/SistemaGerencia/Gerencia.php");
?>