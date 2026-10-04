<?php 

include "../infra/connection.php";

    $nome=$_POST["nome"];
    $categori=$_POST["categori"];
    $descricao=$_POST["descricao"];
    $preco = str_replace(',','.', $_POST["preco"]);
    $estoque=$_POST["estoque"];
    $data_validade=$_POST["data_validade"];
    

$stmt = $conn->prepare("INSERT INTO produto(nome,categori,descricao,preco,estoque,data_validade) VALUES (?,?,?,?,?,?)");

$stmt->bind_param("sssdis", $nome, $categori, $descricao, $preco, $estoque, $data_validade);

$stmt->execute();

$stmt->close();
header("location: ../index.php");

?>
