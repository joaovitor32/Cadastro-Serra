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
                echo "<img oncontextmenu='return false' class='imgMembro' src='Php/Foto/PegaImagem.php?Id=$Row->CodMembro'>";
                echo "</div>";
                echo "<div class='box1'>";
                echo "<div><strong>Nome:</strong><span> ".utf8_encode($Nome)."</span></div>";
                echo "<div><strong>Curso:</strong><span> ".utf8_encode($Curso)."</span></div>";
                echo "<div><strong>Ano de entrada:</strong><span> ".date("d-m-Y",strtotime($Row->AnoDeEntrada))."</span></div>";
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
?>