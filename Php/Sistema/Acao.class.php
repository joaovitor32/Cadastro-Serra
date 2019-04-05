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
        
            echo "<table class='table Tabela'>";
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
                echo "<td> $Nome</td>";
                echo "<td> $Data</td>";
                echo "<td> $DataIni</td>";
                echo "<td> $DataFim</td>";
                echo "<td> $Atividades</td>";
                echo "<td> $Descricao</td>";
                echo "</tr>";
                echo "<tr>";

            }
            echo "</table>";
        }
    }
?>