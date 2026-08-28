<?php
include 'conexion.php';

$id = $_GET['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$sugerencia = $_POST['sugerencia'];

$sql = "UPDATE contacto SET 
    nombre = '$nombre', 
    telefono = '$telefono', 
    correo = '$correo',
    sugerencia = '$sugerencia' 
    WHERE id = $id";

$conn->query($sql);

header("Location: tablas.php");
?>
