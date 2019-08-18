<?php
// Get the parameters from URL
$sex = $_REQUEST["sex"];
$gpa = $_REQUEST["gpa"];
$libros = $_REQUEST["libros"];
$edoCivil = $_REQUEST["edoCivil"];
$edadPadre = $_REQUEST["edadPadre"];
$relEsfuerzoExito = $_REQUEST["rel"];
$apoyoAcademico = $_REQUEST["apoyoAcademico"];
$ambienteEscolar = $_REQUEST["ambienteEscolar"];
$presionFamiliar = $_REQUEST["presionFamiliar"];

//Create csv file
$csvFile = fopen('/var/www/html/PruebaR/Test2.csv', 'w');
chmod("Test2.csv", 0777);
fwrite($csvFile, "Genero,Libros,Promedio,Union padres,Edad padre,Apoyo academico,Presion familiar,Ambiente escolar,Relacion esfuerzo-exito\n");
fwrite($csvFile, $sex.",".$libros.",".$gpa.",".$edoCivil.",".$edadPadre.",".$apoyoAcademico.",".$presionFamiliar.",".$ambienteEscolar.",".$relEsfuerzoExito."\n");
fclose($csvFile);

//Predict using the saved R model
echo exec("Rscript Predict.r");

?>
