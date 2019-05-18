<?php
    require('../Classes/Conexao.class.php');
    require('../Classes/Membro.class.php');
    $NomeJs=$valor=$_GET['valor'];
    $Membro=new Membro();
    $Membro->SelectMembroJs($NomeJs);
?>