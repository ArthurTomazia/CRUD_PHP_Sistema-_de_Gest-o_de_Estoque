<?php 
include "../infra/connection.php";

$id=$_GET["id"];

$stmt = $conn->prepare("SELECT * FROM produto WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();

$resultado = $stmt->get_result();
$produto = $resultado->fetch_assoc();

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
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $produto["id"]; ?>">

        <label for="nome">Nome do produto: </label>
        <input type="text" name="nome" value="<?php echo htmlspecialchars($produto["nome"]); ?>" required>
        <br>

        <label for="categori">Categoria do produto: </label>
        <input type="text" name="categori" value="<?php echo htmlspecialchars($produto["categori"]); ?>" required>
        <br>

        <label for="descricao">Descricao do produto: </label>
        <input type="text" name="descricao" value="<?php echo htmlspecialchars($produto["descricao"]); ?>" required>
        <br>

        <label for="preco">Preço do produto: </label>
        <input type="number" name="preco" step="0.01" value="<?php echo htmlspecialchars($produto["preco"]); ?>" required>
        <br>

        <label for="estoque">Estoque disponivel:</label>
        <input type="number" name="estoque" value="<?php echo htmlspecialchars($produto["estoque"]); ?>" required>
        <br>
        
        <label for="data_validade">Data de validade do produto:</label>
        <input type="date" name="data_validade" value="<?php echo htmlspecialchars($produto["data_validade"]); ?>" required>
        <br>
        <button type="submit">Editar produto</button>
    </form>


</main>

</body>
</html>