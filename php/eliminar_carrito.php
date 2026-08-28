<?php
include "conexion.php";
$id_carrito = $_GET['id'];
mysqli_query($conn, "DELETE FROM carrito WHERE id_carrito = '$id_carrito'");
header("Location: carrito.php");
?>
