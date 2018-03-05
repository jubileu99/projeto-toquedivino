<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login</title>
		<link rel="stylesheet" href="css/Style.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
	</head>
	<body class="body">
		<div class="container-fluid">
			<div class="main">
					<div class="div-img">
						<img src="img/avatar_login.png" alt="">
					</div>
				<h1>Login</h1>
				<hr>
				<div class="form">
					<form action="">
						<div class="input">
							<input type="text" placeholder="Usuário">
						</div>
						<div class="input">
							<input type="password" placeholder="Senha">
						</div>
						<button type="submit" class="btn-enviar">Enviar</button>
					</form>
				</div>
				<div class="loginIncorreto" style="display:none;">
					<small>Usuario ou senha incorretos!</small>
				</div>
			</div>
		</div>
	</body>
		<script src="js/App.js" type="text/javascript"></script>
</html>