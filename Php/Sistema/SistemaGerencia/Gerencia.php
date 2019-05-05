<?php
    session_start();
?>
<!DOCTYPE HTML>
<html> 
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="Css/MenuLateralSistema.css">
        <link rel="stylesheet" type="text/css" href="Css/Index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <section>
           <?php
                require('../SistemaGerencia/BarraLateral/BarraLateralSistema.php');
           ?>
        </section>
        <section class="displayMensagem">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 offset-md-1">
                        <img class="imgGerencia" src="Img/logoserra.png">
                        <div class="textH"> 
                            <h1><strong>Bem-vindo!<strong><h1>
                            <h2>Clique em uma das Abas!</h2>
                            <h5><?= isset($_GET['erro']) ? '<span class="spanAlerta";">Erro ao dar Logout</span> ' : "";?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
