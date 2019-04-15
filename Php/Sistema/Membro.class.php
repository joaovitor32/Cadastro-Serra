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
                
                echo "<div class='box1'>";
                echo "<img oncontextmenu='return false' class='imgMembro' src='/Php/Sistema/Foto/PegaImagem.php?Id=$CodMembro'>";
                echo "</div>";
                echo "<div class='box2'>";
                echo "<span><strong>Nome:</strong> ".utf8_encode($Nome)."</span>";
                echo "<span><strong>Curso:</strong>".utf8_encode($Curso)."</span>";
                echo "<span><strong>Ano de entrada:</strong>".date("d-m-Y",strtotime($AnoEntrada))."</span>";
                echo "<span><strong>Cargo:</strong> ".utf8_encode($Cargo)."</span>";
                echo "<span><strong>Telefone:</strong> ".$Telefone."</span>";
                echo "<span><strong>CPF:</strong> ".$CPF."</span>";
                echo "</div>";
                echo "<div class='box3'>";
                echo "<span><strong>Rua:</strong> ".utf8_encode($Rua)."</span>";
                echo "<span><strong>Número:</strong> ".$Numero."</span>";
                echo "<span><strong>Email:</strong> ".utf8_encode($Email)."</span>";
                echo "<span><strong>Bairro:</strong> ".utf8_encode($Bairro)."</span>";
                echo "<span><strong>Data de nascimento:</strong> ".date("m-d-Y",strtotime($DataNas))."</span>";
                echo "<span><strong>Status:</strong> ".$Status."</span>";
                echo "</div>";
            }
        }
    }
?>