<!DOCTYPE html>
<html lang="es">
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/all.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<title>Jóvenes talento.</title>
	</head>
	<body>
		<!-- Barra de navegación -->
		<?php
			include "BarraNavegacion.php";
		?>
		
		<!-- Main -->
		<main class="container">
			<div class="jumbotron">
				<div class="row h-100">
					<div class="row container ">
						<div class="col-md-8">
							<h1 class="display-3">Predicción de jóvenes talento a temprana edad.</h1>
							<p class="lead">Esta página tiene como propósito exponer los resultados del 
							estudio: Identificación de jóvenes talento utilizando algoritmos de machine learning.  </p>
						</div>
						<div class="col-md-4 my-auto">
							<img class="img-fluid" src="images/UAZ.png">
						</div>
					</div>
				</div> <!-- Termina renglón -->
				<hr>
				<p class="text-justify">Las Olimpiadas del conocimiento son eventos que se llevan año con año, las cuales tratan de distintas 
				disciplinas cada una: Biología, Química, Informática, Matemáticas, Física, entre otras disciplinas. Los 
				estudiantes más sobresalientes son aquellos que a temprana edad comenzaron a incursionar en estas disciplinas 
				y se prepararon hasta realizarse.
				</p>
				<p class="text-justify">Más de la mitad de los estudiantes que participan en este tipo de competencias realizan estudios postdoctorales
				en áreas técnicas de STEM una vez que terminan su carrera, por lo que su participación y preparación son 
				importantes para el desarrollo de Zacatecas y del país. 
				</p>
				<p class="text-justify">La identificación temprana de estudiantes con aptitudes necesarias para competir otorga una ventaja competitiva
				en las competencias. Fomentar y cultivar competidores desde temprana edad es una tarea difícil en cualquier disciplina.
				El resultado del proyecto es una herramienta en forma de test que ayuda en la identificación de jóvenes talento a temprana
				edad, que dadas las características del estudiante, otorga una probabilidad de ser un joven talento.
				</p>
				<br>
				<div class="row"><div class="row container">
					<div class="col-md-6 text-center">
						<a href="JovenesTalento.pdf"><button type="button" class="btn btn-primary">Resultados</button></a>
					</div>
					<div class="col-md-6 text-center">
						<a href="Test.php"><button type="button" class="btn btn-primary">Realizar test</button></a>
					</div>
				</div></div>
			</div>
		</main>
		<?php
			echo exec("Rscript Script.r");
		?>
		
		<!-- Footer -->
		<?php
			include "Footer.php";
		?>
	</body>
</html>
