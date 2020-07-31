<?php

        require("conexion.php");

        $grado = intval($_POST['grado']);
        $correo = mysqli_real_escape_string($connect, $_POST['correo']);
        $sql = "INSERT INTO alumnos (grado, correo, password) VALUES ('$grado', '$correo','test')";
        if(mysqli_query($connect, $sql)){
                echo "Registro exitoso.";
        } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
        }
                
        // Close connection
        mysqli_close($connect);
        header('Location: index.php');