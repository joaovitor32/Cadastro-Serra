<?php
    class TreinamentoMembro extends BancoDeDados{
        private $DuracaoDias;
        private $HorasTotais;
        private $TipoTreinamento;

        public function SelectTreinamentoMembro($NomeRed){

            $BD = new BancoDeDados();
            $SQLSelectTreinamento="SELECT * FROM MembroTreinamento MT INNER JOIN Treinamento T ON T.CodTreinamento=MT.CodTreinamento INNER JOIN Membro M ON M.CodMembro =MT.CodMembro WHERE M.Nome='$NomeRed'";
            $ConsultaTreinamento=mysqli_query($BD->ConectarBanco(),$SQLSelectTreinamento);
        
            echo "<table class='table table-responsive'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>Treinamento:</th>";
            echo "<th scope='col'>Duração em dias:</th>";
            echo "<th scope='col'>Duração em horas:</th>";
            echo "<th scope='col'>Descrição do treinamento:</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            if(mysqli_num_rows($ConsultaTreinamento)){
                $i=0;
                while($Treinamento = mysqli_fetch_array($ConsultaTreinamento)){
                    $i++;
                    $DuracaoDias=$Treinamento['DuracaoDias'];
                    $HorasTotais=$Treinamento['HorasTotais'];
                    $TipoTreinamento=$Treinamento['TipoTreinamento'];

                    echo "<tr>";
                    echo "<td> $i</td>";
                    echo "<td>".$DuracaoDias."</td>";
                    echo "<td>".$HorasTotais."</td>";
                    echo "<td>".$TipoTreinamento."</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            
            }else{

                echo "<tr>";
                echo "<td colspan='4'><div class='tdNoneData'>Não há nenhum dado disponível</div></td>";
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
            
            }
        }
    }
?>