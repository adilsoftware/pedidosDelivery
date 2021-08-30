<?php

$conn  = new mysqli("fdb30.awardspace.net", "3639130_adilsoftware", "ad81guilherme", "3639130_adilsoftware");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

	$recid=$_GET["idexc"];

$stmt = $conn->mysql_query("delete, from tbclientes where idcliente=$recid");


header("rel_clientes.html")

?>