<?php
session_start();
include "conexion.php";


if (!isset($_GET['id'])) {
    die("No se recibió el id del producto.");
}

$id = (int)$_GET['id'];


$sql = "SELECT * FROM productos WHERE id = $id LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $producto = $result->fetch_assoc();


    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id]['cantidad']++;
    } else {
        $_SESSION['carrito'][$id] = [
            "nombre"   => $producto['nombre'],
            "precio"   => (int)$producto['precio'],
            "cantidad" => 1
        ];
    }

    header("Location: carrito.php");
    exit;
} else {
    echo "Producto no encontrado.";
}
