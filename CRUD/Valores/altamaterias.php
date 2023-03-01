<hmtl>
	<head>
        <title>Nova Materia</title>
    </head>
	
    <body>
	<h1 class="center">Estado do rexistro dunha nova materia</h1>
	<?php
		include '../bbdd/conector.php';

		// Recollo os datos enviados a través do formulari 
		  $Cod_Materia = $_POST["Cod_Materia"];
		  $Horas = $_POST["Horas"];
		  $Materia = $_POST["Materia"];
		  
		// Inserto los datos en BBDD
	    	$insert_materia = "INSERT INTO materias (Cod_Materia, Materia, Horas) VALUES ('$Cod_Materia', '$Materia', '$Horas')";


	if ($result = mysqli_query($conector, $insert_materia)) {
	    echo "<h3 class='center'>Materia " . $Materia ." creado correctamente."."<br></h3>";		    
	} else {
	    echo ("Non se puido rexistrar a materia -> ". mysqli_error($conector))."<br><br>";
	}
	    
	?>
	<a href="altaalumnosform.html">Volver al Formulario</a><br><br>
	<a href=".././centro.html">Volver al Inicio</a>
    </body>
</html>
