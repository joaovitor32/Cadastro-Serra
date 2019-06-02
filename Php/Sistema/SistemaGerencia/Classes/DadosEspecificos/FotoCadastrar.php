<?php
    include("../Conexao.class.php");
    include("../Projeto.class.php");    
    $NomeProjeto=$_POST["NomeProjeto"];
    $Projeto = new Projetos();
    $Projeto->CadastrarFotosProjeto($_FILES['fotos'],$NomeProjeto);
?>