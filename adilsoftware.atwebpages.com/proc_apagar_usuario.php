<?php
session_start();
include_once("conexao.php");


$id = filter_input(INPUT_GET, 'idcliente', FILTER_SANITIZE_NUMBER_INT);
if(!empty($idcliente)){
	$result_usuario = "DELETE FROM tbclientes WHERE idcliente='$idcliente'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: index.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: index.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: index2.php");
}
