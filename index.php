<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Agregar Alumno</title>
</head>
<body>
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