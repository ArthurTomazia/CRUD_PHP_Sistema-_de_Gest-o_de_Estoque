<?php 

include "../infra/connection.php";

    $nome=$_POST["nome"];
    $categori=$_POST["categori"];
    $descricao=$_POST["descricao"];
    $estoque=$_POST["estoque"];
    $data_validade=$_POST["data_validade"];
    $preco = str_replace(',','.', $_POST["preco"]);

$stmt = $conn->prepare("INSERT INTO Brinquedos(nome,categori,faixa_etaria,preco,estoque,data_validade) VALUES (?,?,?,?,?,?)");

$stmt->bind_param("sssdi", $nome, $categori, $descricao, $preco, $estoque, $data_validade);

$stmt->execute();

$stmt->close();
header("location: ../index.php");

?>
