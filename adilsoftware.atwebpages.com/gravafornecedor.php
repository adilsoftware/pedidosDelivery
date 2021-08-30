<?php

$conn  = new mysqli("fdb30.awardspace.net", "", "", "");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO  tbfornecedor (fornecedor, tipo, site, fone, email) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $fornecedor, $tipo, $site, $fone, $email);

$fornecedor = $_GET["fornecedor"];
$tipo = $_GET["tipo"];
$site = $_GET["site"];
$fone = $_GET["fone"];
$email = $_GET["email"];

$stmt->execute();

header("location:usuariosalvo.html")

?>
