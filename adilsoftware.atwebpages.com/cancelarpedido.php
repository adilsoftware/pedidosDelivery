<?php

$usuario = $_GET['nome'];
$fone = $_GET['fone'];
$idfornecedor = $_GET['idfornecedor'];

$con=mysqli_connect('fdb30.awardspace.net', '3639130_adilsoftware', 'ad81guilherme', '3639130_adilsoftware');
        
        
        
$valor = $_GET['valor'];
 //echo "o valor é ".$valor;
 //$valor = $valor + ($valor * 10/100);
 //echo " novo preco 10%  ".$valor; 
 //no navegador digite http://localhost/teste.php?valor=100



                
//                if(isset($_GET['valor'])) $valor = $_POST['valor'];
  //              echo $valor; 


$result_cursos = "UPDATE `tbpedidos` SET `status` = 'Cancelado' WHERE `tbpedidos`.`idpedidos` = '$valor'";
	
	$resultado_cursos = mysqli_query($con, $result_cursos);	
        
 

        header("location:pedidos.html?fone=$fone&nome=$usuario&idfornecedor=$idfornecedor")

?>