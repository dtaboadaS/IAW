<html>
  <head>
        <title>Novo Profesor</title>
    </head>
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Estado do rexistro dun novo profesor</h1>
	<?php
		include 'conector.php';
		
// Recoge los datos del formulario
$Cod_Profesor = $_POST['Cod_Profesor'];
$DNI = $_POST['DNI'];
$Nombre = $_POST['Nombre'];
$Apellido1 = $_POST['Apellido1'];
$Apellido2 = $_POST['Apellido2'];
$Localidad = $_POST['Localidad'];
$Imparte = $_POST['Imparte'];
$telefono = $_POST['telefono'];

// Inserto los datos en BBDD
	    	$insert_profesor = "INSERT INTO profesores (Cod_Profesor, DNI, Nombre, Apellido1, Apellido2, Localidad, Imparte, telefono) VALUES ('$Cod_Profesor', '$DNI', '$Nombre', '$Apellido1', '$Apellido2', '$Localidad', '$Imparte', '$telefono')";

if ($result = mysqli_query($conector, $insert_profesor)) {
	    echo "<h3 class='center'>Profesor " . $Nombre ." creado correctamente."."<br></h3>";		    
	} else {
	    echo ("Non se puido rexistrar o alumno/a -> ". mysqli_error($conector))."<br><br>";
	}
?>
<div class="center">
	    <form action="altaprofesores.html">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
