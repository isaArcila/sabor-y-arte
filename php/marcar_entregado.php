<?php
include "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id_pedido']);

    $query = mysqli_query($conn, "UPDATE pedidos SET estado = 'entregado' WHERE id_pedido = $id");

    if ($query) {
        echo "✅ Pedido marcado como entregado.";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>
