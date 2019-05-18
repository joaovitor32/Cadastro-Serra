<?php

    include("../Classes/Conexao.class.php");
    include("../Classes/Membro.class.php");
    include("../Classes/Projeto.class.php");
    
    $Membro=$_POST['membro'];
    $ProjetoNome=$_POST['projeto'];
    $DataIni=$_POST['iniprojeto'];
    $DataFim=$_POST['fimprojeto'];
    $Preco=$_POST['preco'];
    $Descri=$_POST['descricao'];
    $Contratante=$_POST['contratante'];

    //Não lembro a utilidade disso mais $MembroArray = '"' . implode('","', $Membro) . '"';
    $BD=new BancoDeDados();
    $SQLConsultaProjeto="SELECT * FROM Projeto WHERE Nome = '$ProjetoNome'";
    $Retorno=mysqli_query($BD->ConectarBanco(),$SQLConsultaProjeto);
    $linhas=mysqli_num_rows($Retorno1);
    if($linhas>0){
        header("location: /Php/Sistema/SistemaGerencia/Cadastrar/ProjetoCadastrar.php?errocadastro=1");
    }else{
        $Projeto=new Projetos();
        $Projeto->CadastrarProjeto($Membro,$ProjetoNome,$DataIni,$DataFim,$Preco,$Descri,$Contratante);
    }
 ?>