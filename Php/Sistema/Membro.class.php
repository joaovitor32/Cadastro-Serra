<?php 
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
            while($Membro=mysqli_fetch_object($ConsultaMembro)){
                
                $CodMembro=$Membro->CodMembro;
                $Nome=$Membro->Nome;
                $Curso=$Membro->Curso;
                $AnoEntrada=$Membro->AnoDeEntrada;
                $Cargo=$Membro->Cargo;
                $Telefone=$Membro->Telefone;
                $CPF=$Membro->CPF;
                $Rua=$Membro->Rua;
                $Numero=$Membro->Numero;
                $Email=$Membro->Email;
                $Bairro=$Membro->Bairro;
                $DataNas=$Membro->DataNascimento;
                $Status=$Membro->Status;
                
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
?>