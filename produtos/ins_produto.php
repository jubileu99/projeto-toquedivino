<?php
	//Página para adicionar produtos ao banco de dados.
	
	include '../_templates/conexao.php';

	$loja = $_POST['loja'];
	$ref = $_POST['ref'];
	$desc = $_POST['desc'];
	$tam = $_POST['tamanho'];
	$qtd = $_POST['quantidade'];
	$custo = $_POST['custo'];
	$venda = $_POST['venda'];
	

	$utf = $conn->query('SET NAMES "utf8"');
	$sql = "insert into produtos values('','$loja','$ref','$desc','$tam','$qtd','$custo','$venda','')";
	if($conn->query($sql)){
		echo '
			<script>
				alert("Produto inserido com sucesso");
				location.href="adicionar_produto.php";
			</script>';
	}else
		echo '
			<script>
				alert("Falha ao inserir produto");
				location.href="adicionar_produto.php";
			</script>';
		
?>