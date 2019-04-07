<?php
    class EventoMembro extends BancoDeDados{
        private $Nome;
        private $Data;
        private $Descricao;

        public function SelectEventoMembro($NomeRed){
            $BD = new BancoDeDados();
            $SQLSelectEvento = "SELECT * FROM Evento AS Ev INNER JOIN MembroEvento AS Me ON Me.CodEvento=Ev.CodEvento INNER JOIN Membro M ON Me.CodMembro=M.CodMembro WHERE M.Nome='$NomeRed'";
            $ConsultaEventoMembro=mysqli_query($BD->ConectarBanco(),$SQLSelectEvento);

            echo "<table class='table Tabela'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>Eventos:</th>";
            echo "<th scope='col'>Nome:</th>";
            echo "<th scope='col'>Data:</th>";
            echo "<th scope='col'>Descrição:</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            $i=0;
            while($Evento=mysqli_fetch_array($ConsultaEventoMembro)){
                $i++;
                $Nome=$Evento['NomeEvento'];
                $Data=$Evento['Data'];
                $Descricao=$Evento['Descricao'];

                echo "<tr>";
                echo "<td> $i</td>";
                echo "<td>".utf8_encode($Nome)."</td>";
                echo "<td>".date("d-m-Y",strtotime($Data))."</td>";
                echo "<td>".utf8_encode($Descricao)."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>