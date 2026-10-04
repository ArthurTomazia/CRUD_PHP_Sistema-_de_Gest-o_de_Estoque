<?php 

$conn = new mysqli("localhost", "root", "", "estoque");
if($conn->connect_error){
    die("Erro na coneção com o banco de dados");
};
$conn->set_charset("utf8mb4");
?>
 