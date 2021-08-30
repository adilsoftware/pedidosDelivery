<?php
        $con=mysqli_connect('fdb30.awardspace.net', '3639130_adilsoftware', 'ad81guilherme', '3639130_adilsoftware');
        
        
        
$usuario = $_GET['usuario'];
$senha = $_GET['senha'];
$lembrar = $_GET['lembrar'];


$sql="select * from tbfornecedor WHERE `fone`='{$usuario}' order by fornecedor";
$result=mysqli_query($con,$sql);



while($mostrar=mysqli_fetch_array($result)){
	$idfornecedor = $mostrar['idfornecedor'];
	$fone = $mostrar['fone'];
	$email = $mostrar['email'];
        $fornecedor = $mostrar['fornecedor'];
}










if ($fone <>"" ){
        if ($senha <> $email){
        header("location:errosenha.html");
            }else{


                                if(isset($_GET['lembrar'])){
                                
                                setcookie('fone', $usuario, time()+0);   //apagar cookies
                                setcookie('senha', $senha, time()+0);	
                                setcookie('lembrar', $lembrar, time()+0);	
                                setcookie('fone', $usuario);    //gravar no cookies
                                setcookie('senha', $senha);
                                setcookie('lembrar', 'checked');
                                header("location:salausuario.html?nome=$fornecedor&fone=$fone&lembrar=checked&idfornecedor=$idfornecedor");
                                
                                
                                }else{
                                
                                setcookie('fone', $usuario, time()+0);   //apagar cookies
                                setcookie('senha', $senha, time()+0);	
                                setcookie('lembrar', $lembrar, time()+0);	
                                setcookie('fone', $usuario);    //gravar no cookies
                                setcookie('senha', '');
                                setcookie('lembrar', '');
                                header("location:salausuario.html?nome=$fornecedor&fone=$fone&lembrar=nao&idfornecedor=$idfornecedor");
                                }
                                
}

    }else{
   header("location:errosenha.html");
   }





?>