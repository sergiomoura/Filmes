<?php
	// Incluindo $filmes
	include('./includes/filmes.php');

	// Incluindo $generos
	include('./includes/generos.php');

	if( !array_key_exists('id',$_GET) || $_GET['id'] >= count($filmes) ){
		echo('FILME INEXISTENTE!');
		die();
	}

	$id = 1 * $_GET['id'];
	$f = $filmes[$id];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Turma da Mônica - Laços - Clube do Filme</title>

	<!-- Meu estilo -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/filme.css">
</head>

<body>
	<nav>
		<ul>
			<?php
				foreach($generos as $g){
					echo('<li><a href="#">'.$g.'</a></li>');
				}
			?>
		</ul>
		<form method="GET" action="busca.php">
			<input type="text" name="trecho">
			<button type="submit">Buscar</button>
		</form>
	</nav>
	<main>

		<h2><?= $f['titulo'] ?></h2>
		<img src="./assets/img/cartazes/cartaz-<?= $id ?>.png" alt="<?= $f['titulo'] ?>" class="cartaz">
		<section>

			<div class="sinopse">
				<h5>Sinopse</h5>
				<div><?= $f['sinopse'] ?></div>
			</div>

			<div class="censura">
				<h5>Censura</h5>
				<div><?= ($f['censura'] == 0) ? ('Livre') : ($f['censura']) ?></div>
			</div>
			
			<div class="critica">
				<h5>Crítica</h5>
				<div><?= $f['critica'] ?></div>
			</div>
		</section>

		<?= $f['trailer'] ?>
	</main>
</body>

</html>