<?php 

$conn = new mysqli("localhost", "root", "", "Loja_Brinquedos");
if($conn->connect_error){
    die("Erro na coneção com o banco de dados");
};
$conn->set_charset("utf8mb4");
?>
 