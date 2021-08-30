<?php
$con=mysqli_connect('fdb30.awardspace.net', '3639130_adilsoftware', 'ad81guilherme', '3639130_adilsoftware');

?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="menu.css">	
</head>
<body>



	<form name="f_excluir" method="post" action="Rel_clientes_excluir.php">
        		
		
		<table width="90%" border=0 bgcolor="#e6f2ff" align=center >
			<TR>

                        <TR>
				<td bgcolor="#6da3f9">Codigo</td><td bgcolor="#6da3f9">Nome</td><td bgcolor="#6da3f9">Endereço</td><td bgcolor="#6da3f9">Email</td><td bgcolor="#6da3f9">Selecionar</td>
			</TR>
                        <tbody id="myTable">
                        
                        

			<?php
                        
                        $con=mysqli_connect('fdb30.awardspace.net', '3639130_adilsoftware', 'ad81guilherme', '3639130_adilsoftware');

				if(isset($_POST['sel'])){
					foreach ($_POST['sel'] as $codigo) {
						$sql="INSERT INTO from tbclientes where idcliente=$codigo";
						$res=mysqli_query($con,$sql);
					};
				}else{
					echo "";
				}

	include_once("conexao.php");
	$sql = "SELECT * FROM tbclientes";
	$res = mysqli_query($con, $sql);
        
				
				while($vreg=mysqli_fetch_row($res)){
					$vcod=$vreg[0];
					$vnome=$vreg[1];
					$vend=$vreg[2];
					$vema=$vreg[3];

					echo "<tr>";
					echo "<td>$vcod</td><td>$vnome</td><td>$vend</td><td>$vema</td>";
					echo "<td align=center><input type=checkbox value=$vcod name=sel[]></td>";
					echo "</tr>";
				}
				mysqli_close($con);
			?>
                        
                            </tbody>

		</table>
<br>
		<input type="submit"  name="f_del" value="Comprar"/>

	</form>

	
</body>
</html>