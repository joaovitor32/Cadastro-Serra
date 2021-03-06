<?php
    class Projetos extends BancoDeDados{
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
                    //$DataIniProjeto=$Projeto['DataIni'];
                    //$DataFimProjeto=$Projeto['DataFim'];
                    $Nome=$Projeto['Nome'];
                    $Preco=$Projeto['Preco'];
                    $Descricao=$Projeto['Descricao'];
                    
                    echo "<tr>";
                    echo "<td> $i</td>";
                    echo "<td>".utf8_encode($Nome)."</td>";
                    echo "<td>".utf8_encode($Cargo)."</td>";
                    echo "<td> $Preco</td>";
                    echo "<td> $DataIniMembro</td>";
                    echo "<td> $DataFimMembro</td>";
                    echo "<td> $DataIniProjeto</td>";
                    echo "<td> $DataFimProjeto</td>";
                    echo "<td>".utf8_encode($Descricao)."</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }else{
                echo "<tr>";
                echo "<td colspan='9'><div class='tdNoneData'>Não há nenhum dado disponível</div></td>";
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
            
            }
        }
        public function VisualizarProjeto(){
            $BD=new BancoDeDados();
            $SQLSelect="SELECT * FROM Projeto";
            $ConsultaProjeto=mysqli_query($BD->ConectarBanco(),$SQLSelect);

            echo "<table id='myTable' class='Tabela'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nome: </th>";  
            echo "<th>Visuzalizar ficha :</th>";    
            echo "<th>Data de início: </th>";     
            echo "<th>Data de finalização: </th>";
            echo "<th>Preço: </th>";
            echo "<th>Descrição: </th>";
            echo "<th>Contratante: </th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr>";
            while($Projeto=mysqli_fetch_object($ConsultaProjeto)){

                echo "<td>".utf8_encode($Projeto->Nome)."</td>";            
                echo "<td><a href='../Classes/DadosEspecificos/FolhaSistemaProjeto.php?Nome=$Projeto->Nome'  target='_blank'><div class='boxImg'><img class='eyeProjeto' src='../Classes/DadosEspecificos/Img/eye.svg'></div></a></td>";
                echo "<td>".date("d-m-Y",strtotime($Projeto->DataIni))."</td>";           
                echo "<td>".date("d-m-Y",strtotime($Projeto->DataFim))."</td>";
                echo "<td>".utf8_encode($Projeto->Preco)."</td>";
                echo "<td>".utf8_encode($Projeto->Descricao)."</td>"; 
                echo "<td>".utf8_encode($Projeto->Contratante)."</td>";    
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
        public function CadastrarProjeto($Membro1,$ProjetoNome,$DataIni,$DataFim,$Preco,$Descri,$Contratante){
            $BD=new BancoDeDados();
            $SQLSelect= [];
            $CodMembro=[];
            $SQLInsertProjeto="INSERT INTO Projeto (Nome,DataIni,DataFim,Preco,Descricao,Contratante) VALUES('$ProjetoNome','$DataIni','$DataFim','$Preco','$Descri','$Contratante')";
            $conexao=$BD->ConectarBanco();
            if(mysqli_query($conexao,$SQLInsertProjeto)){
                $CodeNewProject=$conexao->insert_id;
                for($i=0;$i<count($Membro1);$i++){
                    $NomeMembro=$Membro1[$i];
                    $SQLSelect[$i]="SELECT CodMembro FROM Membro WHERE Nome='$NomeMembro'";
                    $SQLSelectMembro=mysqli_query($BD->ConectarBanco(),$SQLSelect[$i]);
                    while($Membro=mysqli_fetch_assoc($SQLSelectMembro)){
                        $CodMembro[$i]=$Membro["CodMembro"];
                    }
                }
                mkdir('../FotosProjeto/'.$ProjetoNome, 0777);
            }else{
                header("location: /Php/Sistema/SistemaGerencia/Cadastrar/ProjetoCadastrar.php?errocadastro=3");
            }
            $ProjetosMembro = new ProjetosMembro();
            $ProjetosMembro->InsertMembroProjeto($CodeNewProject,$CodMembro);
            $conexao->close();
        }
        public function CadastrarFotosProjeto($Fotos,$NomeProjeto){
            $Path="../../FotosProjeto/".$NomeProjeto."/";
            $Diretorio=opendir($Path);
            $NumProj=0;
            while(readdir($Diretorio)){
                $NumProj++;
            }
            closedir($Diretorio);
            for($i=0;$i<count($Fotos);$i++){
                if($Fotos["error"][$i] == 0){
                    $arquivo_tmp=$Fotos['tmp_name'][$i];
                    $nome =$Fotos['name'][$i];
                    $extensao=pathinfo($nome,PATHINFO_EXTENSION);
                    $extensao=strtolower($extensao);
                    if(strstr('.jpg;.jpeg;.gif;.png',$extensao)){
                        $NewName=($NumProj+$i-1).'.jpeg';
                        $Destino=$Path.$NewName;
                        @move_uploaded_file($arquivo_tmp,$Destino);                    
                    }
                }
            }
            header("location: /Php/Sistema/SistemaGerencia/Classes/DadosEspecificos/FolhaSistemaProjeto.php?NomeR=".$NomeProjeto);
        }
        public function CardsFotoProjeto($NomeProjeto){
            $Path="../../FotosProjeto/".$NomeProjeto."/";
            $Arquivos = glob("$Path{*.jpg,*.JPG,*.png,*.gif,*.bmp,*.jpeg}", GLOB_BRACE);
            if(count($Arquivos)!=0){
                for($i=0;$i<=count($Arquivos);$i++){
                    echo "<div class='card boxCardFoto'>";
                    echo "<img class='card-img fotoImg' src=".$Arquivos[$i].">";
                    echo "</div>";
                }
            }
        }
    }
    class ProjetosMembro extends BancoDeDados{
        public function InsertMembroProjeto($CodeNewProject,$CodMembro){
            $BD = new BancoDeDados();
            $conexao=$BD->ConectarBanco();
            $SQLInsertMembroProjeto=[];
            for($i=0;$i<sizeof($CodMembro);$i++){
                $ValorCodMembro=$CodMembro[$i];
                $SQLInsertMembroProjeto[$i]="INSERT INTO ProjetoMembro (CodMembro,CodProjeto) VALUES('$ValorCodMembro','$CodeNewProject')";
                mysqli_query($conexao, $SQLInsertMembroProjeto[$i]);
            }
            $conexao->close();
            header("location: /Php/Sistema/SistemaGerencia/Cadastrar/ProjetoCadastrar.php");
        }
    }
?>