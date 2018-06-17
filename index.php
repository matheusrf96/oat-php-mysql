<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("config/conexao_bd.php");

if(isset($_GET["pg"])){
    $pg = $_GET["pg"];
}
else{
	$pg = "inicio";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Compre seu carro</title>
	<meta charset="utf-8" />
	<link rel="icon" href="img/icon.jpg" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="assets/js/main.js"></script>
</head>
<body class="container">
	<header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="index.php">Compre seu Carro</a>

		<div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="?pg=inicio">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?pg=veiculos&filtro=">Veiculos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?pg=cadastro">Cadastrar Veículo</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="?pg=contato">Contato</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="?pg=sobre">Sobre</a>
				</li>
			</ul>
		</div>
		</nav>
	</header>

	<main>
		<div>
			<?php include("paginas/".$pg.".php"); ?>
		</div>
	</main>

	<footer class="footer rodape">
		<div class="container">
          <p class="text-white">&copy;2018. Jeferson Maciel e Matheus Rodrigues.</p>
        </div>
	</footer>

</body>
</html>