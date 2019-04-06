<!DOCTYPE HTML>
<html> 
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="Css/MenuLateral.css">
        <link rel="stylesheet" type="text/css" href="Css/Folha.css">
        <link rel="stylesheet" type="text/css" href="Php/Sistema/Css/Membro.css">
        <link rel="stylesheet" type="text/css" href="Php/Sistema/Css/Tabelas.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <!---Barra lateral-->
<body>
    <?php
        $NomeRed=$_POST['Nome'];
        require('Php/Sistema/Conexao.class.php');
        include("Php/Sistema/Membro.class.php");
        include("Php/Sistema/Acao.class.php");
        include("Php/Sistema/Projeto.class.php");
        include("Php/Sistema/Evento.class.php");
    ?>
    <section>
        <img class="imgBoxTopoCel" src="Img/logoserra.png">
        <div class="floatBox">
            <img class="imgBoxTopo" src="Img/logoserra.png">
            <a href="#">Membro</a>
            <a href="#">Projetos</a>
            <a href="#">Ações</a>
            <a href="#">Eventos</a>
            <a href="#">Treinamento</a>
        </div>
    </section>
    <section class="viewForm">
        <div class="container boxFormulario">
            <div class="row">
                <div class="col-md-12">
                    <div class="section1">
                        <?php
                            $Membro=new Membro();
                            $Membro->SelectMembro($NomeRed);
                        ?>
                    </div>
                </div>    
            <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section2">
                        <?php
                            $ProjetoMembro = new ProjetosMembro();
                            $ProjetoMembro->SelectMembroProjeto($NomeRed);
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section3">
                        <?php
                            $AcaoMembro = new AcaoMembro();
                            $AcaoMembro->SelectAcaoMembro($NomeRed);
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section4">
                        <?php
                            $EventoMembro = new EventoMembro();
                            $EventoMembro->SelectEventoMembro($NomeRed);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="Membro.js"></script>
</body>
