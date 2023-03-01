<html>
	<head>
        <title>Cambio datos</title>
    </head>
    <body>
	<h1 class="center">Cambio de datos de curso</h1>
<?php
// Establecer la conexión con la base de datos
$conexion = mysqli_connect("localhost", "usuario", "abc123.", "universidad");

// Obtener los datos del formulario
$Cod_Curso = $_POST['Cod_Curso'];
$Nombre = $_POST['Nombre'];
$Inicio_Curso = $_POST['Inicio_Curso'];

// Crear la consulta SQL para actualizar los datos
$consulta = "UPDATE cursos SET Nombre = '$Nombre', Inicio_Curso = '$Inicio_Curso' WHERE Cod_Curso = $Cod_Curso";

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
	    <form action="cambiarcurso.html">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
