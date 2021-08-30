<?php


	include_once("conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['idfornecedor']);
	$fornecedor = mysqli_real_escape_string($conn, $_POST['fornecedor']);
        	$tipo = mysqli_real_escape_string($conn, $_POST['tipo']);
                	$site = mysqli_real_escape_string($conn, $_POST['site']);
	$detalhes = mysqli_real_escape_string($conn, $_POST['fone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	echo "$id - $fornecedor - $detalhes";
	$result_cursos = "UPDATE tbfornecedor SET fornecedor='$fornecedor', tipo='$tipo', site='$site', fone='$detalhes', email='$email' WHERE idfornecedor = '$id'";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=login.html'>
				
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=login.html'>

			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>