<?php
include "conexion.php";

$id_carrito = $_POST['id_carrito'];
$cantidad = $_POST['cantidad'];

$sql = "UPDATE carrito SET cantidad='$cantidad' WHERE id_carrito='$id_carrito'";
mysqli_query($conn, $sql);

header("Location: carrito.php");
