<?php
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$dbname = "universidad";
		
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if (!$conn)
		{
			die("No hay conexión: ".mysqli_connect_error());
		}
		
		$nombre = $_POST["usuario"];
		$pass = $_POST["password"];
		
		$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$pass."'");
		$nr = mysqli_num_rows($query);
		
		if($nr == 1)
		{
			header("Location: ../centro.html");
		}
		else if ($nr == 0)
		{
			echo "No ingreso";
		}
?>
