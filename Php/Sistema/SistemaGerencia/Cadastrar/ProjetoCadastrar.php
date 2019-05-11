<?php
    session_start();
?>
<!DOCTYPE HTML>
<html> 
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="../Css/MenuLateralSistema.css">
        <link rel="stylesheet" type="text/css" href="Css/CadastroProjeto.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <!---Barra lateral-->
    <body>
        <section>
           <?php
                require('../BarraLateral/BarraLateralSistema.php');
           ?>
        </section>
        <section class="displayCadastro">
            <div class="container">
                <?= isset($_GET['errocadastro']) ?'<span class="spanAlerta";">Erro detectado: Projeto já cadastrado no sitema</span> ' : "";?>
                <form action="ProjetoBD.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="box1">
                                <span>Nome do projeto:</span> <input type="text" name="nomedoprojeto" required>
                                <span>Preço:</span><input type="number" name="preco" required>
                                <span>Descrição:</span><input type="text" name="descricao" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box2">
                                <span>Data de início:</span><input type="date" name="iniprojeto" required>
                                <span>Data de finalização prevista:</span><input type="date" name="fimprojeto" required>
                                <span>Contratante:</span><input type="text" name="contratante" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="box3" id="boxPai">
                                <span>Qtd de membros: <input type="text" id="nummembro" required><a href=# onclick="addField();"><img class="iconAdd" src="Icon/add.svg"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 offset-md-4">
                            <input class="inputCadastrar" name="cadastro" type="submit" value="Cadastrar">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script src="Js/ProjetoCadastrar.js"></script>
    </body>
</html>
