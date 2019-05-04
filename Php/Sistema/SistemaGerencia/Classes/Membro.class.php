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
        private $AnoDeEntrada;
     
        public function Estado($number){
            if($number==1){
                echo "<td><strong>Ativo na empresa</strong></td>";
            }else{
                echo "<td><strong>Inativo na empresa</strong></td>";
            }
        }

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
                $Estado=$Membro->Estado;
                
                echo "<div class='box1'>";
                echo "<img oncontextmenu='return false' class='imgMembro' src='/Php/Sistema/SistemaGerencia/Fotos/$CodMembro.jpeg'>";
                echo "</div>";
                echo "<div class='box2'>";
                echo "<span><strong>Nome:</strong> ".utf8_encode($Nome)."</span>";
                echo "<span><strong>Curso:</strong>".utf8_encode($Curso)."</span>";
                echo "<span><strong>Ano de entrada:</strong> ".$AnoEntrada."</span>";
                echo "<span><strong>Cargo:</strong> ".utf8_encode($Cargo)."</span>";
                echo "<span><strong>Telefone:</strong> ".$Telefone."</span>";
                echo "<span><strong>CPF:</strong> ".$CPF."</span>";
                echo "</div>";
                echo "<div class='box3'>";
                echo "<span><strong>Rua:</strong> ".utf8_encode($Rua)."</span>";
                echo "<span><strong>Número:</strong> ".$Numero."</span>";
                echo "<span><strong>Bairro:</strong> ".utf8_encode($Bairro)."</span>";
                echo "<span><strong>Email:</strong> ".utf8_encode($Email)."</span>";
                echo "<span><strong>Data de nascimento:</strong> ".date("m-d-Y",strtotime($DataNas))."</span>";
                echo $this->Estado($Estado);
                echo "</div>";
            }
        }
        public function CadastrarMembro($Nome,$Curso,$AnoEntrada,$Cargo,$Telefone,$CPF,$Rua,$Numero,$Bairro,$Email,$Aniversario,$Foto){
            $BD=new BancoDeDados();
            $SQLInsert="INSERT INTO Membro (Nome,Curso,AnoDeEntrada,Cargo,Telefone,CPF,Rua,Numero,Email,DataNascimento,Bairro,Estado) VALUES('$Nome','$Curso','$AnoEntrada','$Cargo','$Telefone','$CPF','$Rua','$Numero','$Email','$Aniversario','$Bairro','1')";
            $conexao=$BD->ConectarBanco();
            if( mysqli_query($conexao, $SQLInsert)){
                $NewCode=$conexao->insert_id;
            }
            $conexao->close();
            if($Foto["error"] == 0){
                $arquivo_tmp=$Foto['tmp_name'];
                $nome =$Foto['name'];
                $extensao=pathinfo($nome,PATHINFO_EXTENSION);
                $extensao=strtolower($extensao);
                if(strstr('.jpg;.jpeg;.gif;.png',$extensao)){
                    $NewName=$NewCode.'.jpeg';
                    $Destino="../Fotos/".$NewName;
                    @move_uploaded_file($arquivo_tmp,$Destino);                    
                }
            }
            header("location: /Php/Sistema/SistemaGerencia/Cadastrar/MembroCadastrar.php");
        
        }
        public function VisualizarMembro(){
            $BD=new BancoDeDados();
            $SQLSelect="SELECT * FROM Membro";
            $ConsultaMembro=mysqli_query($BD->ConectarBanco(),$SQLSelect);

            echo "<table id='myTable' class='Tabela'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nome:</th>";      
            echo "<th>Curso;</th>";     
            echo "<th>Ano de Entrada:</th>";
            echo "<th>Cargo:</th>";
            echo "<th>Telefone:</th>";
            echo "<th>CPF:</th>";
            echo "<th>Rua:</th>";
            echo "<th>Número:</th>";
            echo "<th>Email:</th>";
            echo "<th>Bairro:</th>";
            echo "<th>Data de nascimento:</th>";
            echo "<th>Estado:</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

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
                $Estado=$Membro->Estado;
                
                echo "<tr>";
                echo "<td>".utf8_encode($Nome)."</td>";            
                echo "<td>".utf8_encode($Curso)."</td>";           
                echo "<td>".date("d-m-Y",strtotime($AnoEntrada))."</td>";
                echo "<td>".utf8_encode($Cargo)."</td>";
                echo "<td>".$Telefone."</td>"; 
                echo "<td>".$CPF."</td>";    
                echo "<td>".utf8_encode($Rua)."</td>";
                echo "<td>".$Numero."</td>";
                echo "<td>".utf8_encode($Email)."</td>";
                echo "<td>".utf8_encode($Bairro)."</td>";
                echo "<td>".date("d-m-Y",strtotime($DataNas))."</td>";
                echo $this->Estado($Estado);
                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
        }
    }
?>