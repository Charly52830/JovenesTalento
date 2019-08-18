<!DOCTYPE html>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/all.min.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<title>Realizar test</title>
	</head>
	<body>
		<!-- Barra de navegación -->
		<?php
			include "BarraNavegacion.php";
		?>
		<!-- Main -->
		<main class="container">
			 <div class="jumbotron">
			 	<h1 class="text-center">Test de joven talento</h1>
			 	<hr>
			 	<h3>IMPORTANTE:</h3>
			 	<p class="text-justify">El presente cuestionario tiene como propósito ser una guia
			 	en la identificación de jóvenes talento <b>en matemáticas</b>. No pretende crear una
			 	brecha discriminatoria ni ser único instrumento de selección: la experiencia del aplicante,
			 	las aptitudes del estudiante y la disposición del estudiante por aprender, son siempre 
			 	la mejor forma de identificar talento. No se debe negar la participación a ningún 
			 	estudiante por los resultados que arroje la prueba. El resultado predice la probabilidad 
			 	de desarrollar talento en la olimpiada de matemáticas, <b>no predice la probabilidad de 
			 	desarrollar talento en otras disciplinas</b> como deportes o música. Se recomienda 
			 	discreción con los resultados.
			 	</p>
			 	<hr>
			 	<h3 class="text-center">Cuestionario</h3>
			 	<br>
			 	<div class="row"><div class="row container">
			 		<div class="col-md-6">
			 			<!-- Renglón de sexo-->
			 			<div class="row"><div class="row container">
			 				<div class="col-md-4 text-center">
			 					<p>Sexo:</p>
			 				</div>
			 				<div class="col-md-4">
			 					<div class="form-check">
									<input class="form-check-input" type="radio" name="genderRadio" id="radioMasculino" value="M">
									<label class="form-check-label" for="radioMasculino">
										Masculino
									</label>
								</div>							
			 				</div>
			 				<div class="col-md-4">
			 					<div class="form-check">
									<input class="form-check-input" type="radio" name="genderRadio" id="radioFemenino" value="F">
									<label class="form-check-label" for="radioFemenino">
										Femenino
									</label>
								</div>
			 				</div>
			 			</div></div> <!-- Termina sexo -->
			 			<br>
			 			<!-- Renglón de promedio -->
			 			<div class="row"><div class="row container">
			 				<div class="col-md-6">
			 					<p class="text-center">Promedio: </p>
			 				</div>
			 				<div class="col-md-6">
			 					<button type="button" class="btn btn-light" onclick="decreaseValue()">-</button>
								<input type="text" id="promedio" value="8.5" size="3"/>
								<button type="button" class="btn btn-light" onclick="increaseValue()">+</button>
			 				</div>
			 			</div></div> <!-- Termina renglón de promedio-->
			 			<br>
			 			<!-- Renglón de libros -->
			 			<div class="row"><div class="row container text-center">
			 				<div class="col-md-8">
			 					<p class="text-center">Aproximadamente, ¿cuántos libros tienes en tu casa? </p>
			 				</div>
			 				<div class="col-md-4 text-center">
								<input type="number" id="libros" value="50"/>
			 				</div>
			 			</div></div> <!-- Termina renglón de libros -->
			 		</div>
			 		<div class="col-md-6">
			 			<!-- Renglón de estado civil-->
			 			<div class="row"><div class="row container">
			 				<div class="col-md-4 text-center">
			 					<p>Estado civil de padres biológicos:</p>
			 				</div>
			 				<div class="col-md-4">
			 					<div class="form-check">
									<input class="form-check-input" type="radio" name="parentRadio" id="radioUnidos" value="U">
									<label class="form-check-label" for="radioUnidos">
										Unidos
									</label>
								</div>							
			 				</div>
			 				<div class="col-md-4">
			 					<div class="form-check">
									<input class="form-check-input" type="radio" name="parentRadio" id="radioSeparados" value="S">
									<label class="form-check-label" for="radioSeparados">
										Separados
									</label>
								</div>
			 				</div>
			 			</div></div> <!-- Termina estado civil -->
			 			<!-- Edad padres -->
			 			<div class="row"><div class="row container text-center">
			 				<div class="col-md-3">
			 					<p>Edad padre</p>
			 				</div>
			 				<div class="col-md-3">
			 					<input type="number" id="edadPadre" value=""/>
			 				</div>
			 				<div class="col-md-3">
			 					<p>Edad madre</p>
			 				</div>
			 				<div class="col-md-3">
			 					<input type="number" id="edadMadre" value=""/>
			 				</div>
			 			</div></div> <!-- Termina edad padres -->
			 			<div class="row"><div class="row container">
			 				<div class="col-md-8 text-justify">
			 					<p>En una escala del 1 al 5, ¿qué tan relacionado crees que está
			 					<b>el esfuerzo con el éxito</b> de una persona?
			 					</p>
			 				</div>
			 				<div class="col-md-4 text-justify">
								<input type="number" id="relacionEsfuerzoExito" value="3" max="5" min="1"/>
			 				</div>
			 			</div></div>
			 		</div>
			 	</div></div> <!-- Termina primer parte de cuestionario-->
			 	<h4><b>Apoyo académico</b></h4>
			 	<div class="row"><div class="row container">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Actividad</th>
								<th scope="col" class="text-center">Nunca</th>
								<th scope="col" class="text-center">Algunas veces</th>
								<th scope="col" class="text-center">Siempre</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>
									<p>Los profesores de mi escuela me motivan a seguir preparándome
									académicamente.
									</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico1" 
								id="radioAcademico1" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico1" 
								id="radioAcademico2" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico1" 
								id="radioAcademico3" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>
									<p>Los profesores de mi escuela me brindan apoyo o tratan de hacerlo cuando me encuentro
									frustrado por un trbajo escolar.
									</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico2" 
								id="radioAcademico4" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico2" 
								id="radioAcademico5" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico2" 
								id="radioAcademico6" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>
									<p>Los profesores de mi escuela reconocen mis logros y los celebran conmigo.</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico3" 
								id="radioAcademico7" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico3" 
								id="radioAcademico8" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico3" 
								id="radioAcademico9" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>
									<p>Me llevo bien con los profesores de mi escuela.</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico4" 
								id="radioAcademico10" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico4" 
								id="radioAcademico11" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="apoyoAcademico4" 
								id="radioAcademico12" value="3" aria-label=""></td>
							</tr>
						</tbody>
					</table>
			 	</div></div> <!-- Termina apoyo académico -->
			 	<h4><b>Ambiente escolar</b></h4>
			 	<div class="row"><div class="row container">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Actividad</th>
								<th scope="col" class="text-center">Nunca</th>
								<th scope="col" class="text-center">Algunas veces</th>
								<th scope="col" class="text-center">Siempre</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>
									<p>A los compañeros de mi escuela les gustan las materias y les gusta aprender</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar1" 
								id="radioEscolar1" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar1" 
								id="radioEscolar2" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar1" 
								id="radioEscolar3" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>
									<p>Los compañeros de mi escuela me motivan a seguir estudiando y a 
									prepararme académicamente.
									</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar2" 
								id="radioEscolar4" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar2" 
								id="radioEscolar5" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar2" 
								id="radioEscolar6" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>
									<p>Mi escuela reconoce a los alumnos destacados (en deportes, olimpiadas 
									o cualquier concurso).
									</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar3" 
								id="radioEscolar7" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar3" 
								id="radioEscolar8" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar3" 
								id="radioEscolar9" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>
									<p>En mi escuela se promueven actividades fuera del aula (olimpiadas,
									deportes, artes, etc).
									</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar4" 
								id="radioEscolar10" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar4" 
								id="radioEscolar11" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar4" 
								id="radioEscolar12" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>
									<p>Los profesores promueven y motivan actividades extracurriculares 
									durante la clase.
									</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar5" 
								id="radioEscolar13" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar5" 
								id="radioEscolar14" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="ambienteEscolar5" 
								id="radioEscolar15" value="3" aria-label=""></td>
							</tr>
						</tbody>
					</table>
			 	</div></div> <!-- Termina ambiente escolar -->
			 	<h4><b>Presión familiar</b></h4>
			 	<div class="row"><div class="row container">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Actividad</th>
								<th scope="col" class="text-center">Nunca</th>
								<th scope="col" class="text-center">Algunas veces</th>
								<th scope="col" class="text-center">Siempre</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>
									<p>Mis padres o familia esperan que termine mi primaria/secundaria 
									(según sea el caso).
									</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar1" 
								id="radioPresion1" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar1" 
								id="radioPresion2" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar1" 
								id="radioPresion3" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>
									<p>Mis padres enfurecen cuando no consigo el resultado esperado en la escuela.</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar2" 
								id="radioPresion4" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar2" 
								id="radioPresion5" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar2" 
								id="radioPresion6" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>
									<p>Mis padres están al pendiente de mis actividades escolares y mi tarea.</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar3" 
								id="radioPresion7" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar3" 
								id="radioPresion8" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar3" 
								id="radioPresion9" value="3" aria-label=""></td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>
									<p>Mis padres me exigen prepararme o estudiar para obtener un resultado
									en la escuela o fuera de ella.
									</p>
								</td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar4" 
								id="radioPresion10" value="1" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar4" 
								id="radioPresion11" value="2" aria-label=""></td>
								<td class="text-center"><input class="form-check-input position-static" type="radio" name="presionEscolar4" 
								id="radioPresion12" value="3" aria-label=""></td>
							</tr>
						</tbody>
					</table>
			 	</div></div> <!-- Termina presión familiar -->
			 	<div class="text-center">
			 		<button type="button" class="btn btn-info" onclick="predict()">Evaluar</button>
			 	</div>
			 	<br>
			 	<div class="text-center">
			 		<h3><span id="prediccion"></span></h3>
			 	</div>
			 </div>
			 
		</main>
		<!-- Footer -->
		<?php
			include "Footer.php";
		?>
	</body>
</html>

