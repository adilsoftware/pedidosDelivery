<?php

$usuario = $_GET['nome'];
$fone = $_GET['fone'];
$idfornecedor = $_GET['idfornecedor'];
$idpedidos = $_GET['idpedidos'];




$conn  = new mysqli("fdb30.awardspace.net", "", "", "");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO  tbitem (idpedido, idcliente, idproduto, produto, quantidade, valor, observacao) VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssss", $idpedido, $idcliente, $idproduto, $produto, $quantidade, $valor, $observacao);

$idpedido = $_GET["idpedido"];
$idcliente = $_GET["idcliente"];
$idproduto = $_GET["idproduto"];
$produto = $_GET["produto"];
$quantidade = $_GET["quantidade"];
$valor = $_GET["valor"];
$observacao = $_GET["observacao"];


$stmt->execute();

header("location:escolheritem.html?fone=$fone&nome=$usuario&idfornecedor=$idcliente&idpedidos=$idpedido")

?>
