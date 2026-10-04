<?php 
include "../infra/connection.php";

$id = $_GET["id"];
$stmt = $conn->prepare("DELETE from estoque WHERE id=?");
$stmt->bind_param("i", $id);

$stmt->execute();

$stmt->close();
header("location: ../index.php");


?>