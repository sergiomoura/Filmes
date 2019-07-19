<?php
	print_r($_GET);
	die();
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
			<li><a href="#">Gênero 1</a></li>
			<li><a href="#">Gênero 2</a></li>
			<li><a href="#">Gênero 3</a></li>
			<li><a href="#">Gênero 4</a></li>
			<li><a href="#">Gênero 5</a></li>
		</ul>
		<form>
			<input type="text" name="trecho"><button type="submit">Buscar</button>
		</form>
	</nav>
	<main>

		<h2>Turma da Mônica - Laços</h2>
		<img src="./assets/img/cartazes/cartaz-3.png" alt="Turma da Mônica - Laços" class="cartaz">
		<section>

			<div class="sinopse">
				<h5>Sinopse</h5>
				<div>Floquinho, o cachorro do Cebolinha (Kevin Vechiatto), desapareceu. O menino desenvolve então um plano infalível para resgatar o cãozinho, mas para isso vai precisar da ajuda de seus fiéis amigos Mônica (Giulia Benite), Magali (Laura Rauseo) e Cascão (Gabriel Moreira). Juntos, eles irão enfrentar grandes desafios e viver grandes aventuras para levar o cão de volta para casa. Classificação Indicativa livre, sem restrições.</div>
			</div>

			<div class="censura">
				<h5>Censura</h5>
				<div>Livre</div>
			</div>
			
			<div class="critica">
				<h5>Crítica</h5>
				<div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, veniam quia. Quam aperiam eius facere provident officiis suscipit optio earum laudantium aut necessitatibus corrupti qui, dolorem, illum veniam doloribus quae?</div>
			</div>
		</section>

		<iframe src="https://www.youtube.com/embed/A4k3QGPr7oQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		
	</main>
</body>

</html>