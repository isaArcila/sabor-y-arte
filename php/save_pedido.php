<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$cantidad = (int)$_POST['cantidad'];
$direccion = $_POST['direccion'];
$fecha_entrega = $_POST['fecha_entrega'];

$sqlPrecio = "SELECT precio, cantidad FROM inventario WHERE nombre = '$nombre'";
$res = $conn->query($sqlPrecio);

if ($res->num_rows === 0) {
    echo "❌ El producto no existe.";
    exit;
}

$row = $res->fetch_assoc();
$precio = (int)$row['precio'];
$stock = (int)$row['cantidad'];

if ($stock < $cantidad) {
    echo "❌ No hay suficiente stock.";
    exit;
}

$precio_total = $precio * $cantidad;

$sql = "INSERT INTO pedidos (nombre, cantidad, precio, direccion, fecha_entrega)
        VALUES ('$nombre', $cantidad, $precio_total, '$direccion', '$fecha_entrega')";

if ($conn->query($sql)) {
    
    $nuevoStock = $stock - $cantidad;
    $conn->query("UPDATE inventario SET cantidad = $nuevoStock WHERE nombre = '$nombre'");

    echo "✅ Pedido enviado correctamente.";
} else {
    echo "❌ Error al guardar el pedido.";
}
?>
