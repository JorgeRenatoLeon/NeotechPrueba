<?php
$connect=mysqli_connect('35.229.92.94','root','test','prueba_jorge');

if(mysqli_connect_errno($connect))
{
                echo 'Failed to connect';
}


        $grado = intval($_POST['grado']);
        $correo = mysqli_real_escape_string($connect, $_POST['correo']);
        $sql = "INSERT INTO alumnos (grado, correo) VALUES ('$grado', '$correo')";
        if(mysqli_query($connect, $sql)){
                echo "Registro exitoso.";
        } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }
         
        // Close connection
        mysqli_close($connect);