<?php
if(isset($_POST['submit']))
{
	//print_r($_POST['nome']);
	//print_r($_POST['email']);
	//print_r($_POST['senha']);

	include_once('config.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, senha) VALUES('$nome', '$email', '$senha')");

	header('Location: login.php');
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Criar conta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="imagex/png" href="./css/imgs/favicon.ico">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mt-5 mb-3">
						<img src="css/img/logo.png" width="150px">
					</div>
					<div class="cabeçalho mb-3">
						<h4>Crie a sua conta aqui</h4>
					</div>
					<form action="registro.php" method ="POST">
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" name="nome" placeholder="Nome completo" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope"></i></span>
							<input type="email" name="email"  placeholder="Endereço de E-mail" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="senha" placeholder="Senha" required>
						</div>
						<div class="row mb-3">
							<div class="col-12 d-flex">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="cb1">
									<label class="custom-control-label text-white" for="cb1">Concordo com todos os termos e condições</label>
								</div>
							</div>
						</div>
						<div class="text-left mb-3">
							<button type="submit" name="submit" class="btn">Registrar</button>
						
						</div>
						<div class="text-white">já tem uma conta?
							<a href="login.php" class="login-link">Entre aqui</a>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>
</body>
</html>
