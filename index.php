<?php 
include "infra/connection.php";
$Produto = mysqli_query($conn, "SELECT * FROM produto");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    
<header><h2>Estoque</h2></header>
<br><br>
<main>
    <h3>Adicionar novo produto ao Estoque</h3>
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
        <input type="date" name="data_validade" required>
        <br>
        <button type="submit">Cadastrar produto</button>
    </form>

    <br><br>

<div>

    <h1>Produtos Cadastrados</h1>
    <table>

    <tr>
        <th>nome</th>
        <th>categoria</th>
        <th>descricao</th>
        <th>preco</th>
        <th>estoque</th>
        <th>data_validade</th>
        <th>ID</th>
        <th>Ações</th>
    </tr>

<?php while ($produto = mysqli_fetch_assoc($Produto)) { ?>

    <tr>
        <td><?php echo $produto['nome'] ?></td>
        <td><?php echo $produto['categori'] ?></td>
        <td><?php echo $produto['descricao'] ?></td>
        <td><?php echo $produto['preco'] ?></td>
        <td><?php echo $produto['estoque'] ?></td>
        <td><?php echo $produto['data_validade'] ?></td>
        <td><?php echo $produto['id'] ?></td>
        <td>
            <a href="public/editar.php?id=<?php echo $produto['id'] ?>">Editar</a>
            <a href="public/excluir.php?id=<?php echo $produto['id'] ?>">Excluir</a>
        </td>
    </tr>

<?php } ?>
</table>
</div>


</main>

</body>
</html>