<?php
        $con=mysqli_connect('fdb30.awardspace.net', '3639130_adilsoftware', 'ad81guilherme', '3639130_adilsoftware');
        
        
        
$valor = $_GET['valor'];
 //echo "o valor é ".$valor;
 //$valor = $valor + ($valor * 10/100);
 //echo " novo preco 10%  ".$valor; 
 //no navegador digite http://localhost/teste.php?valor=100



                
//                if(isset($_GET['valor'])) $valor = $_POST['valor'];
  //              echo $valor; 



        
        $sql="DELETE FROM `3639130_adilsoftware`.`tbfornecedor` WHERE `idfornecedor`='$valor'";
        mysqli_query($con,$sql);
        header("location:admin.html")

?>