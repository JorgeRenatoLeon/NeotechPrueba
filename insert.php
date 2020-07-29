<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(isset($_POST['submit']))
{    
	$link = mysqli_connect("35.229.92.94", "root", "test", "prueba_jorge");
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Escape user inputs for security
	$grado = mysqli_real_escape_string($link, $_POST['grado']);
	$correo = mysqli_real_escape_string($link, $_POST['correo']);
	 
	// Attempt insert query execution
	$sql = "INSERT INTO alumnos (grado, correo) VALUES ('$grado', '$correo')";
	if(mysqli_query($link, $sql)){
		echo "Registro exitoso.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
}
?>