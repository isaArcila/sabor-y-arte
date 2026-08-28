<?php
session_start();
include "conexion.php";

$id_usuario = $_SESSION['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$id_carrito = uniqid("C");

$sql = "INSERT INTO carrito (id_carrito, id_usuario, nombre, precio, cantidad)
        VALUES ('$id_carrito', '$id_usuario', '$nombre', '$precio', '$cantidad')";
mysqli_query($conn, $sql);

  echo "<script>alert('Producto agregado al carrito'); location.href='../php/productos4.php';</script>";
