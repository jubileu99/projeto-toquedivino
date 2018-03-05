<?php
	include '../_templates/conexao.php';
	
	$id = $_GET['id'];

	$sql = "delete from produtos where id=$id ";
	
	if($conn->query($sql)){
		echo '
			<script>
				location.href="consulta_produtos.php";
			</script>';
	}else{
		echo '
			<script>
				alert("Erro ao excluir produto");
				location.href="consulta_produtos.php";
			</script>';
	}

?>