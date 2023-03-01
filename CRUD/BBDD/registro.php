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
		
		$sqlgrabar = "INSERT INTO usuarios(usuario,password) values ('$nombre','$pass')";
		
		if(mysqli_query($conn,$sqlgrabar))
		{
			echo "<script> alert('Usuario $nombre registrado'); window.location='../login.html' </script>";
		}
		else if ($nr == 0)
		{
			echo "Error: ".$sql."<br>".mysql_error($conn);;
		}
?>
