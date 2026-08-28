<?php
include "conexion.php";

$result = mysqli_query($conn, "SELECT * FROM pedidos ORDER BY fecha DESC");

$pedidos = [];

while ($row = mysqli_fetch_assoc($result)) {
  $pedidos[] = [
    'id' => $row['id_pedido'],
  'nombre_cliente' => $row['nombre_cliente'],
  'direccion' => $row['direccion'],
  'municipio' => $row['municipio'],
  'telefono' => $row['telefono'],
  'productos' => $row['productos'],
  'total' => $row['total'],
  'pago' => $row['pago'],
  'reclamar' => $row['reclamar'],
  'fecha' => $row['fecha'],
  'estado' => $row['estado']
  ];
}

echo json_encode($pedidos);
?>