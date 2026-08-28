<?php
include "conexion.php";

$query = "SELECT id_pedido, nombre_cliente, productos, total, direccion, pago, numero_cuenta, estado, fecha FROM pedidos ORDER BY fecha DESC";
$resultado = $conn->query($query);

$datos = [];

if ($resultado) {
    while ($fila = $resultado->fetch_assoc()) {
        $datos[] = $fila;
    }
}

echo json_encode($datos);

$conn->close();
?>