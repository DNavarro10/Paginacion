<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paginación</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="">
	<link rel="stylesheet" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
	<div class="contenedor">
		<header>
		<h1>Articulos</h1>
	</header>
	
	<section class="articulos">
		<ul>

			<?php foreach($articulos as $articulo): ?>
				<li><?php echo $articulo['id']. '.-' . $articulo['articulo'] ?></li>
			
			<?php endforeach; ?>
		</ul>
	</section>
	
	<section class="paginacion">
		<ul>
			<!-- establecer cuando el boton de "ANTERIOR" estara desabilitado -->
			<?php if ($pagina == 1): ?>
				<li class="disabled">&laquo;</li>
			<?php else: ?>
				<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
			<?php endif; ?>
			
			<!-- Ejecutar el ciclo de mostrar paginas -->
			<?php
				for ($i=1; $i <= $numeroPaginas; $i++){
					if($pagina == $i){
						echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
					}else{
						echo "<li><a href='?pagina=$i'>$i</a></li>"
					}
				}
			?>
			<!-- establecer cuando el boton de "SIGUIENTE" estara desabilitado -->
			<?php if ($pagina == $numeroPaginas): ?>
				<li class="disabled">&raquo;</li>
			<?php else: ?>
				<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
			<?php endif; ?>
		
		
		</ul>
	</section>
	
	</div>
	
</body>
</html>