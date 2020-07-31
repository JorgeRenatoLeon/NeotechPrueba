<?php
$connect=mysqli_connect('35.202.68.173','root','','bdProyecto1');

if(mysqli_connect_errno($connect)){
        echo 'Failed to connect';
}
else{
        
       

        $grado = intval($_POST['grade']);
        $correo = mysqli_real_escape_string($connect, $_POST['email']);

        $sqlSearch = "SELECT grade, email FROM login WHERE grade='$grado' AND email='$correo'";
        $ansSearch = mysqli_query($connect, $sqlSearch);
        $row = mysqli_fetch_array($ansSearch,MYSQLI_ASSOC);
        $count = mysqli_num_rows($ansSearch);
        
        if ($count ==1){
                header("location: principal.php");

        }else{
                echo "<script><alert>Tu grado o correo es incorrecto</script></alert>";
        
                $sql = "INSERT INTO login (grade, email) VALUES ('$grado', '$correo')";
                if(mysqli_query($connect, $sql)){
                        echo "Registro exitoso.";
                } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
                }
        }
         
        // Close connection
        mysqli_close($connect);
}

?>