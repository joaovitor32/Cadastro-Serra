<?php

    include("../Classes/Conexao.class.php");
    include("../Classes/Membro.class.php");

    $Nome=$_POST['nome'];
    $Curso=$_POST['curso'];
    $AnoEntrada=$_POST['anodeentrada'];
    $Cargo=$_POST['cargo'];
    $Telefone=$_POST['telefone'];
    $CPF=$_POST['cpf'];
    $Foto['foto']=$_FILES['foto'];
    $Rua=$_POST['rua'];
    $Numero=$_POST['numero'];
    $Bairro=$_POST['bairro'];
    $Email=$_POST['email'];
    $Aniversario=$_POST['nascimento'];

    $BD=new BancoDeDados();
    $SQLConsulta="SELECT * FROM Membro WHERE Nome='$Nome'";
    $Retorno=mysqli_query($BD->ConectarBanco(),$SQLConsulta);
    $linhas=mysqli_num_rows($Retorno);

    if($linhas>0){
        header("location: /Php/Sistema/SistemaGerencia/Cadastrar/MembroCadastrar.php?errocadastro=1");
    }else{
        $Membro=new Membro();
        $Membro->CadastrarMembro($Nome,$Curso,$AnoEntrada,$Cargo,$Telefone,$CPF,$Rua,$Numero,$Bairro,$Email,$Aniversario,$Foto['foto']);
    }
    //header("location: /Php/Sistema/SistemaGerencia/Gerencia.php");

?>