<?php

      



	include_once("conexao.php");

        $iditem = mysqli_real_escape_string($conn, $_GET['iditem']);
	$idpedido = mysqli_real_escape_string($conn, $_GET['idpedido']);
	$idcliente = mysqli_real_escape_string($conn, $_GET['idcliente']);
   	$idproduto = mysqli_real_escape_string($conn, $_GET['idproduto']);
   	$produto = mysqli_real_escape_string($conn, $_GET['produto']);
	$quantidade = mysqli_real_escape_string($conn, $_GET['quantidade']);
	$valor = mysqli_real_escape_string($conn, $_GET['valor']);
	$observacao = mysqli_real_escape_string($conn, $_GET['observacao']);

	
	$result_cursos = "UPDATE tbitem SET idpedido='$idpedido', idcliente='$idcliente',idproduto='$idproduto',produto='$produto', quantidade='$quantidade', valor='$valor', observacao='$observacao' WHERE iditem = '$iditem'";
	
	$resultado_cursos = mysqli_query($conn, $result_cursos);	
        


 $usuario = $_GET['nome'];
$fone = $_GET['fone'];
$idfornecedor = $_GET['idfornecedor'];
$idpedidos = $_GET['idpedidos'];


header("location:listaitem.html?idpedidos=$idpedido&idfornecedor=$idcliente");
 ?>