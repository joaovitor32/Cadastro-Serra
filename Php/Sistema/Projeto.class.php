<?php
    class ProjetosMembro extends BancoDeDados{
        private $DataIniMembro;
        private $DataFimMembro;
        private $Cargo;
        private $Nome;
        private $DataIniProjeto;
        private $DataFimProjeto;
        private $Preco;
        private $Descricao;
        
        public function SelectMembroProjeto($NomeRed){
            $BD=new BancoDeDados();
            $SQLSelectProj="SELECT * FROM ProjetoMembro AS Pm INNER JOIN Membro AS M ON Pm.CodMembro =M.CodMembro  INNER JOIN Projeto Po ON Po.CodProjeto=Pm.CodProjeto WHERE M.Nome='$NomeRed'";
            $ConsultaMembroProjeto=mysqli_query($BD->ConectarBanco(),$SQLSelectProj);
           
            echo "<table class='table table-responsive'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>Projetos:</th>";
            echo "<th scope='col'>Nome:</th>";
            echo "<th scope='col'>Cargo:</th>";
            echo "<th scope='col'>Preço:</th>";
            echo "<th scope='col'>Entrada:</th>";
            echo "<th scope='col'>Saída:</th>";
            echo "<th scope='col'>Início:</th>";
            echo "<th scope='col'>Fim:</th>";
            echo "<th scope='col'>Descrição:</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            if(mysqli_num_rows($ConsultaMembroProjeto)){
                $i=0;
                while($Projeto=mysqli_fetch_array($ConsultaMembroProjeto)){
                    $i++;
                    $DataIniMembro =$Projeto['DataIniMembro'];
                    $DataFimMembro=$Projeto['DataFimMembro'];
                    $Cargo=$Projeto['Cargo'];
                    $DataIniProjeto=$Projeto['DataIni'];
                    $DataFimProjeto=$Projeto['DataFim'];
                    $Nome=$Projeto['Nome'];
                    $Preco=$Projeto['Preco'];
                    $Descricao=$Projeto['Descricao'];
                    
                    echo "<tr>";
                    echo "<td> $i</td>";
                    echo "<td> $Nome</td>";
                    echo "<td> $Cargo</td>";
                    echo "<td> $Preco</td>";
                    echo "<td> $DataIniMembro</td>";
                    echo "<td> $DataFimMembro</td>";
                    echo "<td> $DataIniProjeto</td>";
                    echo "<td> $DataFimProjeto</td>";
                    echo "<td> $Descricao</td>";
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