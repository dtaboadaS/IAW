<html>
    <head>
        <title>Creación BBDD</title>
    </head>
    <body>
	<?php
	    include 'constants.php';

		echo "<h1>Script que borra las tablas y laa BBDD</h1>";	    	  
	    //Conexión coa BBDD
	    $conector = mysqli_connect(HOST, USER, PASSWORD) or die("Non se puido abrir a conexión");

	    //Se hai conexión lanzo queries de borrado
	    if (!mysqli_connect_errno() && $conector) {
	        echo "Conexión creada correctamente.<br>";
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.alumnos') or die("No se ha podido borrar la tabla alumno");
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.profesores') or die("No se ha podido borrar la tabla profesores");
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.materias') or die("No se ha podido borrar la tabla materias");
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.cursos') or die("No se ha podido borrar la tabla cursos");
			mysqli_query($conector,'DROP TABLE IF EXISTS '. NOMBRE_BBDD .'.usuarios') or die("No se ha podido borrar la tabla usuarios");
			mysqli_query($conector,'DROP DATABASE IF EXISTS '. NOMBRE_BBDD) or die("No se ha podido borrar la base de datos");
		}
	echo "Tablas y base de datos eliminadas correctamente.<br>";

	mysqli_close($conector);


	?>
		<a href=".././login.html">Volver al Login</a><br><br>
    </body>
</html>
