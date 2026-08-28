<?php
include 'conexion.php';

$id = $_POST['id'] ?? null;
$cantidad = $_POST['cantidad'] ?? null;

if (!$id || !$cantidad) {
    echo "❌ Datos inválidos.";
    exit;
}

$stmt = $conn->prepare("SELECT cantidad FROM inventario WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows === 0) {
    echo "❌ Producto no encontrado.";
    exit;
}

$row = $res->fetch_assoc();
$actual = $row['cantidad'];
$nuevo = $actual + $cantidad;

$upd = $conn->prepare("UPDATE inventario SET cantidad = ? WHERE id = ?");
$upd->bind_param("ii", $nuevo, $id);
$upd->execute();

echo "✅ Inventario actualizado. Nueva cantidad: $nuevo.";
?>
