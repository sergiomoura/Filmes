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