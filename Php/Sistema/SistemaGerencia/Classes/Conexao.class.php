<?php 

class BancoDeDados{
    private $host="127.0.0.1";
    private $username="root";
    private $password="";
    private $dbname="cadastroserra";

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
?>
