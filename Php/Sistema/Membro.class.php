<?php 
    require('Conexao.class.php');
    class Membro extends BancoDeDados{
        private $Nome;
        private $Curso;
        private $AnoEntrada;
        private $Cargo;
        private $Telefone;
        private $CPF;
        private $Rua;
        private $Numero;
        private $Email;
        private $Bairro;
        private $DataNas;
        private $Status;
     
        public function SelectMembro($NomeRed){
            $BD=new BancoDeDados();
            $SQLSelect="SELECT * FROM Membro WHERE Nome='$NomeRed'";
            $ConsultaMembro=mysqli_query($BD->ConectarBanco(),$SQLSelect);
            while($Row=mysqli_fetch_object($ConsultaMembro)){
                
                $CodMembro=$Row->CodMembro;
                $Nome=$Row->Nome;
                $Curso=$Row->Curso;
                $AnoEntrada=$Row->AnoDeEntrada;
                $Cargo=$Row->Cargo;
                $Telefone=$Row->Telefone;
                $CPF=$Row->CPF;
                $Rua=$Row->Rua;
                $Numero=$Row->Numero;
                $Email=$Row->Email;
                $Bairro=$Row->Bairro;
                $DataNas=$Row->DataNascimento;
                $Status=$Row->Status;
                
                echo "<div>";
                echo "<img oncontextmenu='return false' class='imgMembro' src='/Php/Sistema/Foto/PegaImagem.php?Id=$CodMembro'>";
                echo "</div>";
                echo "<div class='box1'>";
                echo "<div><strong>Nome:</strong><span> ".utf8_encode($Nome)."</span></div>";
                echo "<div><strong>Curso:</strong><span> ".utf8_encode($Curso)."</span></div>";
                echo "<div><strong>Ano de entrada:</strong><span> ".date("d-m-Y",strtotime($AnoEntrada))."</span></div>";
                echo "<div><strong>Cargo:</strong><span> ".utf8_encode($Cargo)."</span></div>";
                echo "<div><strong>Telefone:</strong><span> ".$Telefone."</span></div>";
                echo "<div><strong>CPF:</strong><span> ".$CPF."</span></div>";
                echo "</div>";
                echo "<div class='box2'>";
                echo "<div><strong>Rua:</strong><span> ".utf8_encode($Rua)."</span></div>";
                echo "<div><strong>Número:</strong><span> ".$Numero."</span></div>";
                echo "<div><strong>Email:</strong><span> ".utf8_encode($Email)."</span></div>";
                echo "<div><strong>Bairro:</strong><span> ".utf8_encode($Bairro)."</span></div>";
                echo "<div><strong>Data de nascimento:</strong><span> ".date("m-d-Y",strtotime($DataNas))."</span></div>";
                echo "<div><strong>Status:</strong><span> ".$Status."</span></div>";
                echo "</div>";
            }
        }
    }

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
           
            echo "<table class='table Tabela'>";
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

            $i=0;
            while($Dados=mysqli_fetch_array($ConsultaMembroProjeto)){
                $i++;
                $DataIniMembro =$Dados['DataIniMembro'];
                $DataFimMembro=$Dados['DataFimMembro'];
                $Cargo=$Dados['Cargo'];
                $DataIniProjeto=$Dados['DataIni'];
                $DataFimProjeto=$Dados['DataFim'];
                $Nome=$Dados['Nome'];
                $Preco=$Dados['Preco'];
                $Descricao=$Dados['Descricao'];
                
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
                echo "<tr>";
               
            }
        }
    }
?>