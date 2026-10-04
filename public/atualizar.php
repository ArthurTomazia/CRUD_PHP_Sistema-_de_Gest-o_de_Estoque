<?php 

include "../infra/connection.php";
$id=$_POST["id"];
$nome=$_POST["nome"];
$categori=$_POST["categori"];
$descricao=$_POST["descricao"];
$estoque=$_POST["estoque"];
$data_validade=$_POST["data_validade"];
$preco = str_replace(',','.', $_POST["preco"]);

$stmt = $conn->prepare("UPDATE produto SET nome=?,categori=?,descricao=?,preco=?,estoque=?,data_validade=? WHERE id='$id'");

$stmt->bind_param("sssdis", $nome, $categori, $descricao, $preco, $estoque, $data_validade);

$stmt->execute();

$stmt->close();
header("location: ../index.php");
?>