<html>
    <head>
        <title>Creación BBDD</title>
    </head>	
    <body>

	<?php
	    include 'constants.php';
		echo "<h1>Crear base de datos</h1>";
		
	    //conexión con la BBDD
	    $conector = mysqli_connect(HOST, USER, PASSWORD) or die("No se pudo establecer conexión");

	    //Sy hay conexión lanzo queries de creación de bases de datos y tablas

	    if (!mysqli_connect_errno() && $conector) {
	        echo "Conexión creada correctamente. <br>";
			
		//Query para crear la BBDD
	    $createDatabase = "CREATE DATABASE ".NOMBRE_BBDD;

		if (mysqli_query($conector, $createDatabase)) {
		    echo "BBDD ".NOMBRE_BBDD. " creada correctamente"."<br>";
  		    
		} else {
		    echo "No se ha podido crear la BBDD. <br>". "Error: " . mysqli_error($conector)."<br><br>";
		}
	        mysqli_select_db($conector, NOMBRE_BBDD);

	    // Compruebo conexión á BBDD 
	    if ($result = mysqli_query($conector, "SELECT DATABASE()")) {
	        $row = mysqli_fetch_row($result);
	        echo "Conectado a BBDD: " . $row[0] . "<br><br>";
	        mysqli_free_result($result);
	    }

	    // Crear tablas
		//Tabla curso primero, para poder después establecer la relación Foreign Key correctamente:
    		$tabla_alumnos = "CREATE TABLE alumnos (
							Cod_Alumno INT NOT NULL,
							DNI VARCHAR(9) NOT NULL,
							Nombre VARCHAR(50) NOT NULL,
							Apellido1 VARCHAR(50) NOT NULL,
							Apellido2 VARCHAR(50),
							Localidad VARCHAR(50) NOT NULL,
							Cursa SMALLINT NOT NULL,
							Telefono VARCHAR(15),
							Foto VARCHAR(255),
							Alta DATE NOT NULL,
							PRIMARY KEY (Cod_Alumno),
							UNIQUE KEY UQ_ALU_DNI (DNI)
							);";
		
		if (mysqli_query($conector, $tabla_alumnos)) {
		    echo "La tabla  <b> alumnos </b> ha sido  creada correctamente. <br>";
  		    
		} else {
		    echo "No se ha podido crear la tabla.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}
		

		// Táboa alumnos
    		$tabla_profesores = "CREATE TABLE profesores (
								Cod_Profesor INT NOT NULL,
								DNI VARCHAR(9) NOT NULL,
								Nombre VARCHAR(50) NOT NULL,
								Apellido1 VARCHAR(50) NOT NULL,
								Apellido2 VARCHAR(50),
								Localidad VARCHAR(50) NOT NULL,
								Imparte SMALLINT NOT NULL,
								Telefono VARCHAR(15),
								Foto VARCHAR(255),
								Alta DATE NOT NULL,
								PRIMARY KEY (Cod_Profesor),
								UNIQUE KEY UQ_PROF_DNI (DNI)
								);
								";
		
		if (mysqli_query($conector, $tabla_profesores)) {
		    echo "La tabla <b> profesores </b> ha sido creada correctamente. <br>";
  		    
		} else {
		    echo "No se ha podido crear la tabla.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}

		// Táboa para as notas
    		$tabla_materias = "CREATE TABLE materias (
									Cod_Materia INT NOT NULL,
									Materia VARCHAR(65) NOT NULL,
									Horas INT NOT NULL,
									PRIMARY KEY (Cod_Materia),
									UNIQUE KEY UQ_MAT_MAT (Materia)
									);
									";
		
		if (mysqli_query($conector, $tabla_materias)) {
		    echo "La tabla  <b> materias </b> ha sido creada correctamente. <br>";
  		    
		} else {
		    echo "No se ha podido crear la tabla.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}


		// Tabla para las asignaturas
    		$tabla_cursos = "CREATE TABLE cursos (
								Cod_Curso INT NOT NULL,
								Nombre VARCHAR(50) NOT NULL,
								Inicio_Curso DATE NOT NULL,
								PRIMARY KEY (Cod_Curso)
								);
								";
		
		if (mysqli_query($conector, $tabla_cursos)) {
		    echo "La tabla  <b> cursos </b> ha sido creada correctamente. <br>";
  		    
		} else {
		    echo "No se ha podido crear la tabla.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}

		// Tabla para los usuarios de la BBDD
    		$tabla_usuarios = "CREATE TABLE usuarios (
								usuario VARCHAR(50) NOT NULL,
								password VARCHAR(50) NOT NULL,
								PRIMARY KEY (usuario)
								);
								";
		
		if (mysqli_query($conector, $tabla_usuarios)) {
		    echo "La tabla  <b> usuarios </b> ha sido creada correctamente. <br>";
  		    
		} else {
		    echo "No se ha podido crear la tabla.<br>". " Error: " . mysqli_error($conector)."<br/>";
		}

	} else {
	     echo "Ha fallado la conexión con MySQL: " .  mysqli_connect_error();
	     exit();	
	}

	mysqli_close($conector); 

	?>
    </body>
</html>
