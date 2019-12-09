<?php

	include('./includes/generos.php');
	include('./includes/filmes.php');
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
			<?php foreach($generos as $genero): ?>
				<li><a href="#"><?= $genero ?></a></li>
			<?php endforeach; ?>
		</ul>
		<form method="GET" action="busca.php">
			<input type="text" name="trecho">
			<button type="submit">Buscar</button>
		</form>
	</nav>
	
	<main>
		<section>
			<?php foreach($filmes as $i=>$filme): ?>
			<article>
				<a href="filme.php?pos=<?= $i ?>">
					<img src="./assets/img/cartazes/cartaz-<?= $i ?>.png" alt="<?=$filme['titulo']?>">
					<span>Ver +</span>
				</a>
			</article>
			<?php endforeach; ?>
			
		</section>
	</main>
</body>
</html>