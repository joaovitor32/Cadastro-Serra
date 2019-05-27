<!DOCTYPE HTML>
<html> 
    <head>
        <title>Cadastro</title>
        <meta charset="utf-8">  
        <link rel="stylesheet" type="text/css" href="Css/FolhaSistemaMembro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <!---Barra lateral-->
<body>
    <?php
        $NomeRed=$_GET['Nome'];
        require('../Conexao.class.php');
        include("../Membro.class.php");
        include("../Acao.class.php");
        include("../Projeto.class.php");
        include("../Evento.class.php");
        include("../Treinamento.class.php");
    ?>
    <section class="viewForm">
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <?php
                            $Membro=new Membro();
                            $Membro->SelectMembro($NomeRed);
                        ?>
                    </div>
                </div>
            </div>
        </div>    
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <?php
                            $Projetos=new Projetos();
                            $Projetos->SelectMembroProjeto($NomeRed);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <?php
                            $Acao=new AcaoMembro();
                            $Acao->SelectAcaoMembro($NomeRed);
                        ?>
                    </div>
                </div>
            </div>
        </div>          
        <div class="container section">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <?php
                            $Evento=new EventoMembro();
                            $Evento->SelectEventoMembro($NomeRed);
                        ?>
                    </div>
                </div>
            </div>
        </div>         
        <div class="container">
            <div class="row">
                <div class="col-md-12 section">
                    <div>
                        <?php
                            $Treinamento=new TreinamentoMembro();
                            $Treinamento->SelectTreinamentoMembro($NomeRed);
                        ?>
                    </div>
                </div>
            </div>
        </div>           
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-4">
                    <div>
                       <img class="imgClose" onclick="FecharPagina();" src='../DadosEspecificos/Img/close.svg'>
                    </div>
                </div>
            </div>
        </div>              
    </section>
    <script src="Js/FolhaSistema.js"></script>
</body>
</html>
