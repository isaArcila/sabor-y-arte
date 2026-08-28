<?php
session_start();
include "conexion.php";

$id_usuario = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT * FROM carrito WHERE id_usuario = '$id_usuario'");

$carrito = [];

while ($row = mysqli_fetch_assoc($result)) {

  $precio_limpio = preg_replace('/[^0-9]/', '', $row['precio']);
  $precio_numerico = intval($precio_limpio);

  $carrito[] = [
    'id_carrito' => $row['id_carrito'],
    'nombre' => $row['nombre'],
    'precio' => $precio_numerico
  ];
}

echo json_encode($carrito);
?>
