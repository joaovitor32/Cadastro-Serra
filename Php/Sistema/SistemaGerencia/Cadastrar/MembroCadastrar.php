<?php
    session_start();
?>
<!DOCTYPE HTML>
<html> 
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="../Css/MenuLateralSistema.css">
        <link rel="stylesheet" type="text/css" href="Css/CadastroMembro.css">
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
                <?= isset($_GET['errocadastro']) ?'<span class="spanAlerta";">Erro detectado: Membro já cadastrado no sitema</span> ' : "";?>
                <form action="MembroBD.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12 offset-md-1">
                            <div class="box1">
                                <span>Nome:</span> <input type="text" name="nome" required>
                                <span>Curso:</span><input type="text" name="curso" required>
                                <span>Ano de entrada:</span><input type="text" name="anodeentrada" required>
                                <span>Cargo:</span><input type="text" name="cargo" required>
                                <span>Telefone:</span><input type="text" name="telefone" required>
                                <span>CPF:</span><input type="text" name="cpf" required>
                                <span>Foto:</span><input type="file" name="foto" required>
                            </div>
                            <div class="box2">
                                <span>Rua:</span><input type="text" name="rua" required>
                                <span>Número:</span><input type="number" name="numero" required>
                                <span>Bairro:</span><input type="text" name="bairro" required>
                                <span>Email:</span><input type="email" name="email" required>
                                <span>Data de nascimento:</span><input type="date" name="nascimento" required>
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
    </body>
</html>
