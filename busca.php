<?php

	// Incluindo os filmes
	include('./includes/generos.php');
	include('./includes/filmes.php');

	// Lendo superglobal para variável
	$trecho = $_GET['trecho'];

	function contemNoTitulo($filme){
		global $trecho;		
		return stripos($filme['titulo'],$trecho) > -1;
	}

	$filmesFiltrados = array_filter($filmes,'contemNoTitulo');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Clube do Filme</title>

	<!-- Meu css -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/index.css">

</head>
<body>
	<nav>
		<ul>
			<li><a href="#">Gênero 1</a></li>
			<li><a href="#">Gênero 2</a></li>
			<li><a href="#">Gênero 3</a></li>
			<li><a href="#">Gênero 4</a></li>
			<li><a href="#">Gênero 5</a></li>
			<li><a href="#">Gênero 6</a></li>
		</ul>
		<form>
			<input type="text" name="trecho">
			<button type="submit">Buscar</button>
		</form>
	</nav>
	
	<main>
		<section>
			<article>
				<a href="filme.php">
					<img src="./assets/img/cartazes/cartaz-0.png" alt="Nome do Filme">
					<span>Ver +</span>
				</a>
			</article>
			<article>
				<a href="filme.php">
					<img src="./assets/img/cartazes/cartaz-0.png" alt="Nome do Filme">
					<span>Ver +</span>
				</a>
			</article>
			<article>
				<a href="filme.php">
					<img src="./assets/img/cartazes/cartaz-0.png" alt="Nome do Filme">
					<span>Ver +</span>
				</a>
			</article>
			<article>
				<a href="filme.php">
					<img src="./assets/img/cartazes/cartaz-0.png" alt="Nome do Filme">
					<span>Ver +</span>
				</a>
			</article>
			<article>
				<a href="filme.php">
					<img src="./assets/img/cartazes/cartaz-0.png" alt="Nome do Filme">
					<span>Ver +</span>
				</a>
			</article>
			<article>
				<a href="filme.php">
					<img src="./assets/img/cartazes/cartaz-0.png" alt="Nome do Filme">
					<span>Ver +</span>
				</a>
			</article>
			<article>
				<a href="filme.php">
					<img src="./assets/img/cartazes/cartaz-0.png" alt="Nome do Filme">
					<span>Ver +</span>
				</a>
			</article>
			<article>
				<a href="filme.php">
					<img src="./assets/img/cartazes/cartaz-0.png" alt="Nome do Filme">
					<span>Ver +</span>
				</a>
			</article>
		</section>
	</main>
</body>
</html>