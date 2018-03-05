<?php

	$conn = new mysqli('localhost','root','','toque_divino');
	if($conn->connect_error){
		echo '
			<script> 
				alert("Falha ao conectar-se ao banco de dados");
				location.href="login.php";
			</script>';
	}
	
?>