<?php
	include_once("conexao.php");
	$result_cursos = "SELECT * FROM tbclientes";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">


		        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	


		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modal</title>
		
                <link href="bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="menu.css">	
	</head>
	<body>
        
        
        
        


                             
        <!----------------inicio do menu ----------------------------------------------------------------------->
        
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
						<li><a href="filtrodeclientes.html">PESQUISAR</a>
							
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
		<div class="rodape">Todos os Direitos reservados a AdilSoftware</div>	




<!----------------fim do menu ----------------------------------------------------------------------->

        
        

		<div class="container theme-showcase" role="main">
			<div class="page-header">
				
			</div>
			<div class="row">
				
                                                <div><input     id="myInput" type="text" placeholder="pesquisar.."> </div>
                                                <p></>
                                                	
                        	

				<!----Tabela de lista ----->

				<div>
					
                                        <table class="pesquisar" width="100%" border=0 bordercolor="red" bgcolor="#e6f2ff" align=center>

                                                
						<thead>
							
						
							
							
							<tr>
								
								<th bgcolor="#6da3f9">ID</th>
								<th bgcolor="#6da3f9">Nome</th>
								<th bgcolor="#6da3f9">Endereço</th>
								<th bgcolor="#6da3f9">Email</th>
								<th bgcolor="#6da3f9">Excluir/Editar</th>
								
							</tr>

							

						</thead>
						<tbody id="myTable">
							<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
								<tr>


									<td><?php echo $rows_cursos['idcliente']; ?></td>
									<td><?php echo $rows_cursos['nome']; ?></td>
									<td><?php echo $rows_cursos['endereco']; ?></td>
									<td><?php echo $rows_cursos['email']; ?></td>
									 
									
									

									<td>
<!----------------fim da tabela ----------------------------------------------------------------------->

										<!--------Botão de excluir ------------>

										<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal<?php echo $rows_cursos['idcliente']; ?>">Excluir</button>


										<!--------Botão de edição ------------>										
										<button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" 
										data-whatever="<?php echo $rows_cursos['idcliente']; ?>" 
										data-whatevernome="<?php echo $rows_cursos['nome']; ?>"
										data-whateverdetalhes="<?php echo $rows_cursos['endereco']; ?>"
										data-whateveremail="<?php echo $rows_cursos['email']; ?>"
										>Editar</button>
										
                                                                                
                                                                                

									</td>
								</tr>









<!-- Modal botões excluir -->
<div class="modal fade<?php echo $rows_cursos['idcliente']; ?>" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php echo $rows_cursos['idcliente']; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        
        <button type="button" class="btn btn-danger" >Excluir</button>

      
      </div>
    </div>
  </div>
</div>






								<!-- Inicio Modal (lista do Excluir) -->
								<div class="modal fade" id="myModal<?php echo $rows_cursos['idcliente']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows_cursos['nome']; ?></h4>
											</div>
											<div class="modal-body">
												<p><?php echo $rows_cursos['idcliente']; ?></p>
												<p><?php echo $rows_cursos['nome']; ?></p>
												<p><?php echo $rows_cursos['endereco']; ?></p>
												<p><?php echo $rows_cursos['email']; ?></p>


                                                                                                <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                                
                                                                                                
                                                                                                
                                                                                                
                                                                                                
                                                                                                <!--<button type="submit"class="btn btn-danger" >  -->
                                                                                                  <a  class="btn btn-danger"  href='excluir2.php?valor=<?php echo $rows_cursos['idcliente']; ?>'>Excluir</a>
                                                                                               <!-- </button>   -->
                                                                                
                                                                                
                                                                                                </div>

											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->




							<?php } ?>
						</tbody>
					 </table>



   
        
        
        
        
        




				</div>
			</div>		
		</div>
		
		
		

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Clientes</h4>
			  </div>
			  

			  <!-------modal  formulario de (editar) ------>

			  <div class="modal-body">
				<form method="POST" action="processa.php" enctype="multipart/form-data">
				  

				  <div class="form-group">
					<label for="recipient-name" class="control-label">Nome:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>


				  <div class="form-group">
					<label for="message-text" class="control-label">Endereço:</label>
					<input name="endereco" class="form-control" id="detalhes"></textarea>
				  </div>


				  <div class="form-group">
					<label for="message-text" class="control-label">Email:</label>
					<input name="email" class="form-control" id="email"></textarea>
				  </div>



				<input name="idcliente" type="hidden" class="form-control" id="id-curso" value="">
				
				<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-danger">Alterar</button>
                                
                                
			 
				</form>
			  </div>
			  



			</div>
		  </div>
		</div>
                
                
                
                



<!----------------scrit do modal excluir e editar  ----------------------------------------------------------------------->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var recipientnome = button.data('whatevernome')
		  var recipientdetalhes = button.data('whateverdetalhes')
		  var recipientemail = button.data('whateveremail')
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('ID ' + recipient)
		  modal.find('#id-curso').val(recipient)
		  modal.find('#recipient-name').val(recipientnome)
		  modal.find('#detalhes').val(recipientdetalhes)
		  modal.find('#email').val(recipientemail)
		  
		})
	</script>

<!----------------script da pesquisa----------------------------------------------------------------------->
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





  </body>
</html>