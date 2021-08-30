<?php
$con=mysqli_connect('fdb30.awardspace.net', '', '', '');

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















	<nav class="menu">
			<ul>
				<li><a href="#">ARQUIVO</a>
					<ul>
						<li><a href="#">CADASTRO</a>
							<ul>
								<li><a href="clientes.html">CLIENTES</a></li>
								<li><a href="fornecedor.html">FORNECEDOR</a></li>
								<li><a href="produto.html">PRODUTOS</a></li>
							</ul>
						</li>
						<li><a href="pesquisar.html">PESQUISAR</a>
							
						</li>
						<li><a href="imprimir.html">IMPRIMIR</a></li>
						<li><a href="index.html">FECHAR</a></li>
					</ul>
				</li>
				
				<li><a href="#">RELATORIO</a>
					<ul>
						<li><a href="index2.php">CLIENTES</a></li>
						<li><a href="rel_fornecedor.html">FORNECEDOR</a></li>
						<li><a href="rel_produtos.html">PRODUTOS</a></li>
					</ul>
				</li>
				
				<li><a href="configuracao.html">CONFIGURAÇÃO</a>
				</li>
				
				<li><a href="ajuda.html">AJUDA</a></li>
			</ul>
		</nav>
		
		<div class="static"></div>
		<div class="fundo"></div>



  <p></p>
  <p align=center><b>Digite qualquer coisa para ele pesquisar na tabela...</b></p>  
  



















	<form name="f_excluir" method="post" action="Rel_clientes_excluir.php">

        		
		
		<table width="90%" border=0 bgcolor="#e6f2ff" align=center >
			<TR>
                                <td>Pesquisar</td><td><b></b><input class="filtro" id="myInput" type="text" placeholder="pesquisar.."></td><td></td><td></td><td><input type="submit" value="excluir" name="bt_excluir"/></tr></td>
                        <TR>
				<td bgcolor="#6da3f9">Codigo</td><td bgcolor="#6da3f9">Nome</td>
                                <td bgcolor="#6da3f9">Endereço</td><td bgcolor="#6da3f9">Email</td>
                                <td bgcolor="#6da3f9">Selecionar</td><td bgcolor="#6da3f9">Editar</td>
			</TR>
                        <tbody id="myTable">

			<?php
                        
                        $con=mysqli_connect('fdb30.awardspace.net', '3639130_adilsoftware', 'ad81guilherme', '3639130_adilsoftware');

				if(isset($_POST['sel'])){
					foreach ($_POST['sel'] as $codigo) {
						$sql="delete from tbclientes where idcliente=$codigo";
						$res=mysqli_query($con,$sql);
					};
				}else{
					echo "";
				}

				$sql="select * from tbclientes order by idcliente";
				$res=mysqli_query($con,$sql);

				while($vreg=mysqli_fetch_row($res)){
					$vcod=$vreg[0];
					$vnome=$vreg[1];
					$vend=$vreg[2];
					$vema=$vreg[3];

					echo "<tr>";
					echo "<td>$vcod</td><td>$vnome</td><td>$vend</td><td>$vema</td>";
					echo "<td align=center><input type=checkbox value=$vcod name=sel[]></td>";
                                        
                                        
                                        
                                                        
                                        echo "<form name='f_editar' method='get' action='editarcliente.html'>";
                                        echo "<td align=center><input type=submit value=$vcod name=e_id></td>";
					echo "</form>";
                                        
                                        
                                        
                                        
                                        echo "</tr>";
				}
				mysqli_close($con);
			?>
                        
                            </tbody>

		</table>
<br>
		<input type="hidden"  name="f_del" value="f_del"/>

	</form>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


<div class="fundo"></div>
<div class="rodape">Todos os Direitos reservados a AdilSoftware</div>
		
</body>
</html>
