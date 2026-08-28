<?php
include 'conexion.php';

$id = $_GET['id'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];

$sql = "UPDATE inventario SET 
    nombre = '$nombre', 
    categoria = '$categoria', 
    cantidad = '$cantidad'
    WHERE id = $id";

$conn->query($sql);

header("Location: inventario.php");
?>
