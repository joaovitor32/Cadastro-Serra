<!DOCTYPE HTML>
<html> 
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="Css/MenuLateral.css">
        <link rel="stylesheet" type="text/css" href="Css/Folha.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <!---Barra lateral-->
<body>
    <?php
        include("Conexao.php");
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
                            $NomeRedirect=$_POST['Nome'];
                            $SQLSelect="SELECT * FROM Membro WHERE Nome='$NomeRedirect'";
                            $ConsultaMembro=mysqli_query($BD->ConectarBanco(),$SQLSelect);
                            while($Row=mysqli_fetch_object($ConsultaMembro)){
                                echo "<div>";
                                echo "<img oncontextmenu='return false' class='imgMembro' src='Php/Foto/PegaImagem.php?Id=$Row->CodMembro'>";
                                echo "</div>";
                                echo "<div class='box1'>";
                                echo "<div><strong>Nome:</strong><span> ".utf8_encode($Row->Nome)."</span></div>";
                                echo "<div><strong>Curso:</strong><span> ".utf8_encode($Row->Curso)."</span></div>";
                                echo "<div><strong>Ano de entrada:</strong><span> ".date("d-m-Y",strtotime($Row->AnoDeEntrada))."</span></div>";
                                echo "<div><strong>Cargo:</strong><span> ".utf8_encode($Row->Cargo)."</span></div>";
                                echo "<div><strong>Telefone:</strong><span> ".$Row->Telefone."</span></div>";
                                echo "<div><strong>CPF:</strong><span> ".$Row->CPF."</span></div>";
                                echo "</div>";
                                echo "<div class='box2'>";
                                echo "<div><strong>Rua:</strong><span> ".utf8_encode($Row->Rua)."</span></div>";
                                echo "<div><strong>Número:</strong><span> ".$Row->Numero."</span></div>";
                                echo "<div><strong>Email:</strong><span> ".utf8_encode($Row->Email)."</span></div>";
                                echo "<div><strong>Bairro:</strong><span> ".utf8_encode($Row->Bairro)."</span></div>";
                                echo "<div><strong>Data de nascimento:</strong><span> ".date("m-d-Y",strtotime($Row->DataNascimento))."</span></div>";
                                echo "<div><strong>Status:</strong><span> ".$Row->Status."</span></div>";
                                echo "</div>";
                            }
                        ?>
                        <!---
                        <div>
                            <img class="imgMembro" src="Img/download.jpeg">
                        </div>
                        <div class="box1">
                            <div><strong>Nome:</strong><span> João Vitor Muniz Lopes</span></div>
                            <div><strong>Curso:</strong><span> Engenharia da Computação</span></div>
                            <div><strong>Ano de entrada:</strong><span> 01/01/1997</span></div>
                            <div><strong>Cargo:</strong><span> Gerente</span></div>
                            <div><strong>Telefone:</strong><span> 213131322123</span></div>
                            <div><strong>CPF:</strong><span> 17979807774</span></div>
                        </div>
                        <div class="box2">
                            <div><strong>Rua:</strong><span> José Aristides Pereira</span></div>
                            <div><strong>Número:</strong><span> 13</span></div>
                            <div><strong>Bairro:</strong><span> Solares</span></div>
                            <div><strong>Email:</strong><span> Solares</span></div>
                            <div><strong>Data Aniversário:</strong><span> 13/03/1997</span></div>
                            <div><strong>Status na empresa:</strong><span> Ativo</span></div>
                        </div>
                        ----->
                    </div>
                </div>    
            <div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section2">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="Membro.js"></script>
</body>
