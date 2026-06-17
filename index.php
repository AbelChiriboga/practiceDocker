<?php
include("conexion.php");

if(isset($_POST['guardar'])){

    $nombre = $_POST['nombre'];
    $carrera = $_POST['carrera'];

    $sql = "INSERT INTO estudiantes(nombre,carrera)
            VALUES('$nombre','$carrera')";

    $conexion->query($sql);
}

$resultado = $conexion->query(
    "SELECT * FROM estudiantes"
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Estudiantes</title>
</head>
<body>

<h2>Registro de estudiantes</h2>

<form method="post">

    Nombre:
    <input type="text" name="nombre">

    Carrera:
    <input type="text" name="carrera">

    <input type="submit"
           name="guardar"
           value="Guardar">

</form>

<hr>

<table border="1">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Carrera</th>
</tr>

<?php while($fila=$resultado->fetch_assoc()){ ?>

<tr>
    <td><?= $fila['id'] ?></td>
    <td><?= $fila['nombre'] ?></td>
    <td><?= $fila['carrera'] ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>