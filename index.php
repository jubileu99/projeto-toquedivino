<?php 
	session_start();

	if(isset($_SESSION['login_id']) && isset($_SESSION['user'])){
		echo" 
			<script>
				location.href='produtos/consulta_produtos.php';
			</script>
		";
	}else{
		echo" 
			<script>
				location.href='login/login.php';
			</script>
		";
	}
?>