<?php
	include_once("conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['idcliente']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$detalhes = mysqli_real_escape_string($conn, $_POST['endereco']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	echo "$id - $nome - $detalhes";
	$result_cursos = "UPDATE tbclientes SET nome='$nome', endereco='$detalhes', email='$email' WHERE idcliente = '$id'";
	
	$resultado_cursos = mysqli_query($conn, $result_cursos);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=page4.html'>
				
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=page4.html'>
				
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>