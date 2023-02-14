<?php 
//Aquivo de conexao com o banco//

$host = "localhost";
$user = "root";
$pass ="";
$db = "db_site";

$link = mysqli_connect($host,$user,$pass,$db);
$banco = mysqli_connect_errno();
if ($banco == true){
    echo "Erro na Conexao";
}else{
    echo "Conexao OK!";
}


?>