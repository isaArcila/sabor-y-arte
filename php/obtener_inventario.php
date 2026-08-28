<?php
include 'conexion.php';

$sql = "SELECT nombre, precio FROM inventario";
$resultado = $conn->query($sql);

$datos = [];

while ($fila = $resultado->fetch_assoc()) {
    $fila['precio'] = number_format($fila['precio'], 0, ',', '.');
    $datos[] = $fila;
}

header('Content-Type: application/json');
echo json_encode($datos);
?>
