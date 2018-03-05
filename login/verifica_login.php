<?php
	include '../_templates/conexao.php';

	try{
		
		if(isset($_POST['pw']) && isset($_POST['user'])){
			$pw = md5($_POST['pw']);
			$user = $_POST['user'];
			$sql = "select * from usuario where username='$user' and password='$pw'";
			$resultado = $conn->query($sql);
			if($resultado->num_rows > 0){
				session_start();
				$_SESSION['login_id'] = md5('logado');
				$_SESSION['user'] = $user;
				
				echo 1;				
				
			}else
				echo 0;
		}				
	}catch(exception $e){
		echo '<script> alert("erro ao verificar login"); </script>';
	}
?>