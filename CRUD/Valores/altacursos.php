<hmtl>
	<head>
        <title>Novo Curso</title>
    </head>
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
	
    <body>
	<h1 class="center">Estado do rexistro dun novo curso</h1>
	<?php
		include '../bbdd/conector.php';

		// Recollo os datos enviados a través do formulari 
		  $Cod_Curso = $_POST["Cod_Curso"];
		  $Inicio_Curso = $_POST["Inicio_Curso"];
		  $Nombre = $_POST["Nombre"];
		  
		// Inserto los datos en BBDD
	    	$insert_curso = "INSERT INTO cursos (Cod_Curso, Inicio_Curso, Nombre) VALUES ('$Cod_Curso', '$Inicio_Curso', '$Nombre')";


	if ($result = mysqli_query($conector, $insert_curso)) {
	    echo "<h3 class='center'>Curso " . $Nombre ." creado correctamente."."<br></h3>";		    
	} else {
	    echo ("Non se puido rexistrar o curso -> ". mysqli_error($conector))."<br><br>";
	}
	    
	?>
	<div class="center">
	    <form action="altacurso.html">
		<input type="submit" value="Volver al formulario" />
	    </form>
	</div>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
