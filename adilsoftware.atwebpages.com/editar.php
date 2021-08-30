<?php

$conn  = new mysqli("localhost", "root", "", "bdteste");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO  tbclientes (nome, endereco, email) VALUES (?, ?, ?)");

$stmt->bind_param("sss", $nome, $endereco, $email);

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$email = $_GET["email"];

$stmt->execute();

header("location:clientesalvo.html")

?>