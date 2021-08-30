<?php
	$usuario = $_GET['nome'];
$fone = $_GET['fone'];
$idfornecedor = $_GET['idfornecedor'];

$con=mysqli_connect('fdb30.awardspace.net', '', '', '');
        
        
        
$valor = $_GET['valor'];



        
    $result_cursos = "UPDATE tbpedidos SET status='Cancelar' WHERE idpedidos = '$valor'";
$resultado_cursos = mysqli_query($conn, $result_cursos);	
        header("location:pedidos.html?fone=$fone&nome=$usuario&idfornecedor=$idfornecedor")
?>
