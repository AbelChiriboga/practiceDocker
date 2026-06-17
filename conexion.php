<?php

$conexion = new mysqli(
    "db",
    "root",
    "123456",
    "escuela"
);

if($conexion->connect_error){
    die("Error de conexión");
}
?>