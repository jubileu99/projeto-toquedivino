<?php
	include '../_templates/verifica_session.php';
	include '../_templates/conexao.php';
?>
	<!DOCTYPE html>
	<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Consulta</title>
		<link rel="stylesheet" href="../_css/bootstrap.min.css">
		<script src="../_js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="../_js/popper.min.js" type="text/javascript"></script>
		<script src="../_js/bootstrap.min.js" type="text/javascript"></script>
	</head>

	<script>
		function excluir(id) {
			if (window.confirm("Confirmar exclusão do produto?")) {
				location.href = 'del_produto.php?id=' + id;
			}
		}
	</script>

	<style>
		.bodyProdutos {
			margin-top: 3%;
		}
	</style>

	<body>
		<?php		
			include '../_templates/navbar.html';
		
			$id = isset($_GET['id']) ? $_GET['id'] : ''; 
			$sql = "select * from produtos where descricao LIKE '%$id%' or loja LIKE '%$id%' or ref LIKE '%$id%' ";
			$utf = $conn->query("SET NAMES 'utf8'"); 
			$resultado = $conn->query($sql);		
		?>

			<div class="container-fluid bodyProdutos">
				<div class="row">
					<div class="col-sm-9">
						<h2>Consulta aos produtos</h2>
					</div>
					<form class="col-sm-3" method="GET" action="">
						<div class="form-inline col-sm-12">
							<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name="id">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">ok</button>
						</div>
					</form>
				</div>
				<Hr>
				<table class="table table-light table-hover">
					<thead class="thead-dark">
						<tr>
							<th>#</th>
							<th>Loja</th>
							<th>Referência</th>
							<th>Descrição</th>
							<th>Quantidade</th>
							<th>Tamanho</th>
							<th>Valor Custo</th>
							<th>Valor Venda</th>
							<th>Saída</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php 
					
						while($res = mysqli_fetch_array($resultado)){
				
					?>

							<td>
								<?php echo $res['id']; ?>
							</td>
							<td>
								<?php echo $res['loja']; ?>
							</td>
							<td>
								<?php echo $res['ref']; ?>
							</td>
							<td>
								<?php echo $res['descricao']; ?>
							</td>
							<td>
								<?php echo $res['quantidade']; ?>
							</td>
							<td>
								<?php echo $res['tamanho']; ?>
							</td>
							<td>R$
								<?php echo $res['valor_custo']; ?>
							</td>
							<td>R$
								<?php echo $res['valor_venda'];?>
							</td>
							<td>R$
								<?php echo $res['saida']; ?>
							</td>
							<td><button type="button" id="btn-alterar" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Alterar</button></td>
							<td><button type="button" class="btn btn-danger btn-sm" onclick="excluir(<?php echo $res['id']; ?>)">Excluir</button></td>
						</tr>
						<?php } ?>
						<!--  Aqui termina o while -->
					</tbody>
				</table>
			</div>
			<!-- Modal puxando informacoes -->
			<div class="modal fade" id="myModal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Produto X</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- Modal body -->
						<div class="modal-body">

							<!-- Formulario de envio para alterar produtos -->

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
										<input type="text" class="form-control" maxlength="200" name="desc" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="loja" class="col-sm-2 col-form-label">Tamanho:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" maxlength="3" name="tamanho" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="loja" class="col-sm-2 col-form-label">Quantidade:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" maxlength="11" name="quantidade" required>
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
								<div class="form-group row">
									<label for="loja" class="col-sm-2 col-form-label">Saída:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" maxlength="11" name="saida">
									</div>
								</div>
								<br>
								<button type="submit" class="btn btn-primary col-sm-12">Enviar</button>
							</form>
							<!-- Formulario de envio para alterar produtos -->
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
						</div>
					</div>
				</div>
			</div>
			</div>

	</body>

	</html>