<hmtl>
	<head>
        <title>Novo Alumno</title>
    </head>
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Estado do rexistro dun novo alumno</h1>
	<?php
		include 'conector.php';

		// Recollo os datos enviados a través do formulari 
		  $Cod_Alumno = $_POST["Cod_Alumno"];
		  $DNI = $_POST["DNI"];
		  $Nombre = $_POST["Nombre"];
		  $Apellido1 = $_POST["Apellido1"];
		  $Apellido2 = $_POST["Apellido2"];
		  $Localidad = $_POST["Localidad"];
		  $Cursa = $_POST["Cursa"];
		  $Telefono = $_POST["Telefono"];

		// Inserto los datos en BBDD
	    	$insert_alumno = "INSERT INTO alumnos (Cod_Alumno, DNI, Nombre, Apellido1, Apellido2, Localidad, Cursa, Telefono) VALUES ('$Cod_Alumno', '$DNI', '$Nombre', '$Apellido1', '$Apellido2', '$Localidad', '$Cursa', '$Telefono')";


	if ($result = mysqli_query($conector, $insert_alumno)) {
	    echo "<h3 class='center'>Alumno " . $Nombre ." creado correctamente."."<br></h3>";		    
	} else {
	    echo ("Non se puido rexistrar o alumno/a -> ". mysqli_error($conector))."<br><br>";
	}
	    
	?>
	<div class="center">
	    <form action="altaalumnosform.php">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
