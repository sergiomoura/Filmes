<?php

	// Incluindo $filmes
	include('./includes/filmes.php');

	// Incluindo $generos
	include('./includes/generos.php');

	$pos = $_GET['pos'];
	

	// Verificando se $pos é uma posição inválida do meu array
	if($pos >= count($filmes)){
		include('./erros/404.php');
		die();
	}

	// Levantando o filme da posição $pos 
	$filme = $filmes[$pos];

	// echo('<pre>');
	// print_r($filme);
	// echo('</pre>');
	// die();
	
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $filme['titulo']; ?> - Clube do Filme</title>

	<!-- Meu estilo -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/filme.css">
</head>

<body>
	
	<!-- Início da navegação -->
	<?php include('./includes/nav.php'); ?>
	<!-- Fim da navegação -->
	
	<main>

		<h2><?= $filme['titulo']; ?></h2>
		<img src="./assets/img/cartazes/cartaz-<?= $pos ?>.png" alt="<?= $filme['titulo']; ?>" class="cartaz">
		<section>

			<div class="sinopse">
				<h5>Sinopse</h5>
				<div><?= $filme['sinopse'] ?></div>
			</div>

			<div class="censura">
				<h5>Censura</h5>
				<div><?= $filme['censura'] === 0 ? 'Livre' : $filme['censura'] . ' anos' ?></div>
			</div>
			
			<div class="critica">
				<h5>Crítica</h5>
				<div><?= $filme['critica'] ?></div>
			</div>
		</section>

		<?= $filme['trailer'] ?>
	</main>
</body>

</html>