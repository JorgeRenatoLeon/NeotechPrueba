<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agregar Alumno</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="col-md-3">
				<img style="width: 80%;" src="<?php echo $_SESSION['picture'] ?>">
			</div>

			<div class="col-md-9">
				<table class="table table-hover table-bordered">
					<tbody>
						<tr>
							<td>ID</td>
							<td><?php echo $_SESSION['id'] ?></td>
						</tr>
						<tr>
							<td>First Name</td>
							<td><?php echo $_SESSION['givenName'] ?></td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td><?php echo $_SESSION['familyName'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?php echo $_SESSION['email'] ?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td><?php echo $_SESSION['gender'] ?></td>
						</tr>
					</tbody>
				</table>
				<form action="logout.php" method="POST">
					<input type="submit" value="Logout" placeholder="Logout">
				</form>
			</div>
		</div>
		<form action="insert.php" method="POST">
			<p>
				<label for="grado">Grado:</label>
				<input type="number" name="grado" id="grado">
			</p>
			<p>
				<label for="correo">Correo:</label>
				<input type="text" name="correo" id="correo">
			</p>
			<input type="submit" name="save" value="save">
		</form>
	</body>
</html>