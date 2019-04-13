<?php 
    class AcaoMembro extends BancoDeDados{
        private $DatIni;
        private $DataFim;
        private $Atividades;
        private $Descricao;
        private $Nome;
        private $Data;

        public function SelectAcaoMembro($NomeRed){
            $BD=new BancoDeDados();
            $SQLSelectAcao="SELECT * FROM AcaoMembro Am INNER JOIN Membro M ON M.CodMembro = Am.CodMembro INNER JOIN Acao A ON A.CodAcao=Am.CodAcao WHERE M.Nome='$NomeRed'";
            $ConsultaAcaoMembro=mysqli_query($BD->ConectarBanco(),$SQLSelectAcao);
        
            echo "<table class='table table-responsive'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>Ações:</th>";
            echo "<th scope='col'>Nome:</th>";
            echo "<th scope='col'>Data:</th>";
            echo "<th scope='col'>Entrada do Membro:</th>";
            echo "<th scope='col'>Saída do Membro:</th>";
            echo "<th scope='col'>Atividades:</th>";
            echo "<th scope='col'>Descrição:</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            
            if(mysqli_num_rows($ConsultaAcaoMembro)){
                $i=0;
                while($Acao=mysqli_fetch_array($ConsultaAcaoMembro)){
                    $i++;
                    $DataIni=$Acao['DataIni'];
                    $DataFim=$Acao['DataFim'];
                    $Data=$Acao['Data'];
                    $Nome=$Acao['Nome'];
                    $Atividades=$Acao['Atividades'];
                    $Descricao=$Acao['Descricao'];

                    echo "<tr>";
                    echo "<td> $i</td>";
                    echo "<td>".utf8_encode($Nome)."</td>";
                    echo "<td>".date("d-m-Y",strtotime($Data))."</td>";
                    echo "<td>".date("d-m-Y",strtotime($DataIni))."</td>";
                    echo "<td>".date("d-m-Y",strtotime($DataFim))."</td>";
                    echo "<td>".utf8_encode($Atividades)."</td>";
                    echo "<td>".utf8_encode($Descricao)."</td>";
                    echo "</tr>";

                    }
                    echo "</tbody>";
                    echo "</table>";

            }else{
                echo "<tr>";
                echo "<td>Não há nenhum dado disponível</td>";
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
            }
        }
    }
?>