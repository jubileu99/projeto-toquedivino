<?php include '../_templates/verifica_session.php'; ?>
	


<!DOCTYPE html>	
	<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Index</title>
		<link rel="stylesheet" href="../_css/bootstrap.min.css">
		<script src="../_js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="../_js/popper.min.js" type="text/javascript"></script>
		<script src="../_js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	
	<style>
		body{
			background-color: #007bff;
		}
		.AddProdutos{
			width: 600px;
			height: 600px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 5%;
			padding: 20px;
			background-color: white;
			border-radius: 5px;
		}
		h3{
			padding: 10px;
		}
	</style>
	
	<body>
	
		<?php		
			include '../_templates/navbar.html';			
		?>
		
			<div class="container">
				<div class="AddProdutos">
					<h3>Registro de produtos</h3>
					<hr>
					<form action="ins_produto.php" method="POST">
					
						<div class="form-group row">
							<label for="loja" class="col-sm-2 col-form-label">Loja:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" maxlength="100" name="loja" required>
							</div>
						</div>
						
						<div class="form-group row">
							<label for="loja" class="col-sm-2 col-form-label">Referência:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" maxlength="20" name="ref" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="loja" class="col-sm-2 col-form-label">Descrição:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  maxlength="200" name="desc" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="loja" class="col-sm-2 col-form-label">Tamanho:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  maxlength="3" name="tamanho" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="loja" class="col-sm-2 col-form-label">Quantidade:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  maxlength="11" name="quantidade" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="loja" class="col-sm-2 col-form-label">Custo:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Valor de custo do produto" maxlength="11" name="custo" required>
							</div>
						</div>
						<div class="form-group row">
							<label for="loja" class="col-sm-2 col-form-label">Venda:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" placeholder="Valor de venda do produto" maxlength="11" name="venda" required>
							</div>
						</div>
						<br>
						<button type="submit" class="btn btn-primary col-sm-12">Enviar</button>
					</form>
				</div>
			</div>
		</body>
		
</html>
