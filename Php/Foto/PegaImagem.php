<?php
    class BancoDeDados{
        private $host="127.0.0.1";
        private $username="root";
        private $password="";
        private $dbname="CadastroSerra";

        public function ConectarBanco(){
            $conexao=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
            mysqli_set_charset($conexao,'utf-8');
            if(mysqli_connect_errno($conexao)){
                echo "erro".mysqli_connect_errno($conexao);
            }else{
                return $conexao;
            }
        }
    }
    $BD=new BancoDeDados();
    $Id=$_GET['Id'];
    $SQLSelectImagem="SELECT Foto FROM Membro WHERE CodMembro=$Id";
    $ConsultaFoto=mysqli_query($BD->ConectarBanco(),$SQLSelectImagem);
    $Row=mysqli_fetch_object($ConsultaFoto);
    Header("Content type: image/jpeg");
    echo $Row->Foto;
?>