<html>
	<head>
        <title>Cambio datos</title>
    </head>
    <body>
	<h1 class="center">Cambio de datos de alumno</h1>
<?php
// Establecer la conexión con la base de datos
$conexion = mysqli_connect("localhost", "usuario", "abc123.", "universidad");

// Obtener los datos del formulario
$Cod_Alumno = $_POST["Cod_Alumno"];
$DNI = $_POST["DNI"];
$Nombre = $_POST["Nombre"]; 
$Apellido1 = $_POST["Apellido1"];
$Apellido2 = $_POST["Apellido2"];
$Localidad = $_POST["Localidad"];
$Cursa = $_POST["Cursa"];
$Telefono = $_POST["Telefono"];
// Crear la consulta SQL para actualizar los datos
$consulta = "UPDATE alumnos SET Nombre = '$Nombre', DNI = '$DNI', Apellido1 = '$Apellido1', Apellido2 = '$Apellido2', Localidad = '$Localidad', Cursa = '$Cursa', Telefono = '$Telefono' WHERE Cod_Alumno = $Cod_Alumno";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $consulta);

// Verificar si la consulta fue exitosa
if ($resultado) {
  echo "Los datos del curso se han modificado correctamente.";
} else {
  echo "Ha ocurrido un error al modificar los datos del curso.";
}

// Cerrar la conexión con la base de datos
mysqli_close($conexion);
?>
<div class="center">
	    <form action="cambiaralumno.html">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
