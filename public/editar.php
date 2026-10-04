<?php 
include "../infra/connection.php";

$id=$_GET["id"];

$stmt = $conn->prepare("SELECT * FROM estoque WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();

$resultado = $stmt->get_result();
$brinquedo = $resultado->fetch_assoc();

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header></header>

<main>

<h3>Editar Produto</h3>
    <br>
    <form action="public/cadastrar.php" method="POST">
        <label for="nome">Nome do produto: </label>
        <input type="text" name="nome" required>
        <br>

        <label for="categori">Categoria do produto: </label>
        <input type="text" name="categori" required>
        <br>

        <label for="descricao">Descricao do produto: </label>
        <input type="text" name="descricao" required>
        <br>

        <label for="preco">Preço do produto: </label>
        <input type="number" name="preco" step="0.01" required>
        <br>

        <label for="estoque">Estoque disponivel:</label>
        <input type="number" name="estoque" required>
        <br>
        
        <label for="data_validade">Data de validade do produto:</label>
        <input type="number" name="data_validade" required>
        <br>
        <button type="submit">Cadastrar produto</button>
    </form>


</main>

</body>
</html>