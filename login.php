<?php
    require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}
    if (isset($_POST['login'])) {
        require("connection.php");
        echo '<script>console.log("Ingresando")</script>';
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $correo = mysqli_real_escape_string($connect, $_POST['correo']);
        $sql = "SELECT * FROM alumnos WHERE correo='$correo' AND password='$password' ";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['access_token'] = $row["correo"];
            $_SESSION['id'] = $row["grado"];
            $_SESSION['email'] = $row["correo"];
            $_SESSION['gender'] = '';
            $_SESSION['picture'] ='';
            $_SESSION['familyName'] = '';
            $_SESSION['givenName'] = '';
            header('Location: index.php');
        }
        else{
            echo '<script>alert("Login Fallido")</script>';
            header('Location: login.php');
        }
		exit();
	}

	$loginURL = $gClient->createAuthUrl();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" style="text-align:center">

                <img src="https://banner2.cleanpng.com/20180418/gre/kisspng-human-resources-login-management-information-payro-track-5ad7cda3586cb1.5605091515240923233622.jpg" width="100px"><br><br>

                <form method="POST">
                    <input placeholder="Correo..." name="correo" id="password" class="form-control"><br>
                    <input type="password" placeholder="Password..." name="password" id="password" class="form-control"><br>
                    <input type="submit" name="login" value="Login" class="btn btn-primary">
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</body>
</html>