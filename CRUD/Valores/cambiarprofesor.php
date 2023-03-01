<html>
	<head>
        <title>Cambio datos</title>
    </head>
    <body>
	<h1 class="center">Cambio de datos de profesor</h1>
<?php
// Establecer la conexión con la base de datos
$conexion = mysqli_connect("localhost", "usuario", "abc123.", "universidad");

// Obtener los datos del formulario
$Cod_Profesor = $_POST['Cod_Profesor'];
$DNI = $_POST['DNI'];
$Nombre = $_POST['Nombre'];
$Apellido1 = $_POST['Apellido1'];
$Apellido2 = $_POST['Apellido2'];
$Localidad = $_POST['Localidad'];
$Imparte = $_POST['Imparte'];
$telefono = $_POST['telefono'];

// Crear la consulta SQL para actualizar los datos
$consulta = "UPDATE profesores SET Nombre = '$Nombre', DNI = '$DNI', Apellido1 = '$Apellido1', Apellido2 = '$Apellido2', Localidad = '$Localidad', Imparte = '$Imparte', telefono = '$telefono' WHERE Cod_Profesor = $Cod_Profesor";

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
	    <form action="cambiarprofesores.html">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
