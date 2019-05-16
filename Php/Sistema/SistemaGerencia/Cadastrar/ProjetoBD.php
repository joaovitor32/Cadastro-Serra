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

    $MembroArray = '"' . implode('","', $Membro) . '"';
    $SQLConsultaMembro=[];
    $Retorno=[];
    $BD=new BancoDeDados();
    for($i=0;$i<sizeof($Membro);$i++){
        $NomesArray=$MembroArray[$i];
        $SQLConsultaMembro[$i]="SELECT * FROM Membro WHERE Nome = '$NomesArray')";
        $Retorno[$i]=mysqli_query($BD->ConectarBanco(),$SQLConsultaMembro[$i]);
    }
    if(sizeof($Retorno)!=sizeof($Membro)){
        header("location: /Php/Sistema/SistemaGerencia/Cadastrar/ProjetoCadastrar.php?errocadastro=1");
    }else{
        $SQLConsultaProjeto="SELECT * FROM Projeto WHERE Nome = '$ProjetoNome'";
        $Retorno1=mysqli_query($BD->ConectarBanco(),$SQLConsultaProjeto);
        $linhas1=mysqli_num_rows($Retorno1);
        if($linhas1>0){
                header("location: /Php/Sistema/SistemaGerencia/Cadastrar/ProjetoCadastrar.php?errocadastro=2");
        }else{
            $Projeto=new Projetos();
            $Projeto->CadastrarProjeto($Membro,$ProjetoNome,$DataIni,$DataFim,$Preco,$Descri,$Contratante);
        }
    }
 ?>