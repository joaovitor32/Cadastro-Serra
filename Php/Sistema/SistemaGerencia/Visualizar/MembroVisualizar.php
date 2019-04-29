<?php
    session_start();
?>
<!DOCTYPE HTML>
<html> 
    <head>
        <title>Visualizar</title>
        <link rel="stylesheet" type="text/css" href="../Css/MenuLateralSistema.css">
        <link rel="stylesheet" type="text/css" href="Css/MembroVisualizar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        <!-------Data table-------->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="Js/Renderer.js"></script>
        <script>
            $(document).ready( function () {
                $('#myTable').DataTable();
            });
        </script>
    </head>
    <body>
        <section>
           <?php
                require('../BarraLateral/BarraLateralSistema.php');
                require('/home/buzina/Cadastro-Serra/Php/Sistema/Conexao.class.php');
                require('/home/buzina/Cadastro-Serra/Php/Sistema/Membro.class.php');
           ?>
        </section>
        <section>
            <div class="container">
                <?php
                    $Membro= new Membro();
                    $Membro->VisualizarMembro();
                ?>
            </div>
        </section>
    </body>
</html>
