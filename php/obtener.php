<?php
include 'conexion.php';

$resultado = $conn->query("SELECT * FROM inventario");

$productos = [];

while ($fila = $resultado->fetch_assoc()) {
    $productos[] = $fila;
}

echo json_encode($productos);
?>
