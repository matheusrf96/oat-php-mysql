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
	<link rel="icon" href="img/icon.jpg">
	<meta charset="utf-8">
</head>
<body class="text-center" >
	<header>

		<h1>Compre Seu Carro</h1>
		<div class="divMenu" name="menu" >
			<nav>
				<a href="?pg=inicio">Home</a>
				<a href="?pg=sobre">Sobre</a>
				<a href="?pg=veiculos">Veiculos</a>
				<a href="?pg=contato">Contato</a>
			</nav>
		</div>

	</header>

	<main>
		<div>
			<?php include("paginas/".$pg.".php"); ?>
		</div>
	</main>

	<footer>
		<div class="inner">
          <p>Template for <a href="">Jeferson Maciel</a>.</p>
        </div>
	</footer>

</body>
</html>