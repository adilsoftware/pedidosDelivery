<?php

$conn  = new mysqli("fdb30.awardspace.net", "3639130_adilsoftware", "ad81guilherme", "3639130_adilsoftware");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO  tbproduto (descricao, categoria, valor, quantidade, validade) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $descricao, $categoria, $valor, $quantidade, $validade);

$descricao = $_GET["descricao"];
$categoria = $_GET["categoria"];
$valor = $_GET["valor"];
$quantidade = $_GET["quantidade"];
$validade = $_GET["validade"];

$stmt->execute();

header("location:produtosalvo.html")

?>