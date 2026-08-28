<?php
include 'conexion.php';

$id = $_GET['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$rol = $_POST['rol'];

$sql = "UPDATE registro SET 
    nombre = '$nombre', 
    email = '$email', 
    pass = '$pass',
    rol = '$rol'
    WHERE id = $id";

$conn->query($sql);

header("Location: tablas.php");
?>
