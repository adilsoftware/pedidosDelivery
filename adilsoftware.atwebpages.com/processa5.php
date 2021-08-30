<?php

$usuario = $_GET['nome'];
$fone = $_GET['fone'];
$idfornecedor = $_GET['idfornecedor'];




$conn  = new mysqli("fdb30.awardspace.net", "3639130_adilsoftware", "ad81guilherme", "3639130_adilsoftware");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}
$hoje = date('d/m/Y');

$stmt = $conn->prepare("INSERT INTO  tbpedidos (idpedidos, data, idcliente, tipo, status) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $idpedidos, $data, $idcliente, $tipo, $status);

$idpedidos = $_GET["idpedidos"];
$data = $_GET["data"];
$idcliente = $_GET["idcliente"];
$tipo = $_GET["tipo"];
$status = $_GET["status"];

$stmt->execute();
	


$sql="SELECT MAX(`idpedidos`) FROM `tbpedidos`";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result)){
$maximo =  $mostrar['MAX(`idpedidos`)'] ;
}


header("location:escolheritem.html?fone=$fone&nome=$usuario&idfornecedor=$idfornecedor&idpedidos=$maximo")

?>