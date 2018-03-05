<?php
	session_start();
			
	if(isset($_SESSION['login_id']) && isset($_SESSION['user'])){	
	}else{
		echo '<script>location.href="../login/login.php";</script>';
	}
?>