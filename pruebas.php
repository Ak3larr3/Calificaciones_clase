<?php 

require_once('Asignatura.php');
require_once('Curso.php');
require_once('Alumno.php');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Curso</title>
</head>
<body>
	

<?php

	$asignatura1 = new Asignatura("DESARROLLO DE APLICACIONES WEB EN EL ENTORNO SERVIDOR");
	$asignatura2 = new Asignatura("ELABORACIÓN DE DOCUMENTOS WEB MEDIANTE LENGUAJES DE MARCAS");

	$asignatura1->insertar_nota(7);
	$asignatura1->insertar_nota(4);
	$asignatura1->insertar_nota(9);
	$asignatura1->insertar_nota(6);
	$asignatura1->insertar_nota(2);

	$asignatura2->insertar_nota(7);
	$asignatura2->insertar_nota(4);
	$asignatura2->insertar_nota(9);
	$asignatura2->insertar_nota(6);

	$alumno1 = new Alumno("Ricardo","Fernandez García","10342289K");
	$alumno2 = new Alumno("Cecilia","Perez Alonso","71239145C");
	$alumno3 = new Alumno("Gustavo","Ruiz García","45678901E");
	$alumno4 = new Alumno("Roberto","Alonso García","12345678D");
	$alumno5 = new Alumno("Carlos","Perez García","10763901E");
	$alumno6 = new Alumno("Sergio","Gonzalez García","10349278B");
	$alumno7 = new Alumno("Eduardo","Diaz Alonso","11456978D");
	$alumno8 = new Alumno("Ceci","Fernandez García","70345678D");
	$alumno9 = new Alumno("Diana","Perez Diaz","10645678F");
	$alumno10 = new Alumno("Patry","Fernandez García","71345578D");
	$alumno11 = new Alumno("Ivan","Diaz García","10445678C");
	$alumno12 = new Alumno("Willy","Alonso García","70345678D");
	$alumno13 = new Alumno("Loli","Gonzalez Diaz","70349278P");

	$alumno1->set_asignatura($asignatura1);
	

	$curso1 = new Curso();

	$curso1->inscribir_alumno($alumno1);
	$curso1->inscribir_alumno($alumno2);
	$curso1->inscribir_alumno($alumno3);
	$curso1->inscribir_alumno($alumno4);
	$curso1->inscribir_alumno($alumno5);
	$curso1->inscribir_alumno($alumno6);
	$curso1->inscribir_alumno($alumno7);
	$curso1->inscribir_alumno($alumno8);
	$curso1->inscribir_alumno($alumno9);
	$curso1->inscribir_alumno($alumno10);
	$curso1->inscribir_alumno($alumno11);
	$curso1->inscribir_alumno($alumno12);
	$curso1->inscribir_alumno($alumno13);


	echo $curso1;




 ?>

 </body>
</html>