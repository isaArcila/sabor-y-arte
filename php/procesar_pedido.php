<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmación</title>
  <link rel="stylesheet" href="../style/style.css">
</head>
<body class="index">
  

</body>
</html>
<?php
session_start();
include "conexion.php";


$id_usuario = $_SESSION['id'];
$nombre_cliente = $_POST['nombre_cliente'];
$direccion = $_POST['direccion'];
$municipio = isset($_POST['municipio']) ? $_POST['municipio'] : 'Sin municipio';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : 'Sin teléfono';
$productos = isset($_POST['productos']) ? $_POST['productos'] : 'Sin productos';
$pago = $_POST['pago'];
$numero_cuenta = $_POST['numero_cuenta'];
$reclamar = isset($_POST['reclamar']) ? $_POST['reclamar'] : 'No definido';

$carrito = mysqli_query($conn, "SELECT * FROM carrito WHERE id_usuario='$id_usuario'");
$total = 0;
$productos = "";

while ($item = mysqli_fetch_assoc($carrito)) {
  $nombre = $item['nombre'];
  $cantidad = $item['cantidad'];

 
  $productos .= "$nombre x$cantidad, ";

  
  $inv = mysqli_query($conn, "SELECT cantidad, precio FROM inventario WHERE nombre='$nombre'");
  if (mysqli_num_rows($inv)) {
    $datos = mysqli_fetch_assoc($inv);
    $stock = $datos['cantidad'];
    $precio = intval(preg_replace('/[^0-9]/', '', $datos['precio']));
    $subtotal = $precio * $cantidad;
    $total += $subtotal;


    $nuevo_stock = $stock - $cantidad;
    mysqli_query($conn, "UPDATE inventario SET cantidad='$nuevo_stock' WHERE nombre='$nombre'");

  }
}


$productos = rtrim($productos, ", ");


$id_pedido = uniqid("P");
mysqli_query($conn, "INSERT INTO pedidos (
  id_pedido, id_usuario, nombre_cliente, direccion, municipio, telefono,
  productos, total, pago, numero_cuenta, reclamar, fecha, estado
) VALUES (
  '$id_pedido', '$id_usuario', '$nombre_cliente', '$direccion', '$municipio', '$telefono',
  '$productos', '$total', '$pago', '$numero_cuenta', '$reclamar', NOW(), 'pendiente'
)");


mysqli_query($conn, "DELETE FROM carrito WHERE id_usuario='$id_usuario'");

echo "
  <div class='confirmacion-pedido'>
    <h2 class='confirmacion-titulo'>Pedido procesado con éxito</h2>
    <p><strong>Productos:</strong> $productos</p>
    <p><strong>Total:</strong> $ " . number_format($total, 0, ',', '.') . "</p>
    <p><strong>Método de entrega:</strong> $reclamar</p>
    <div class='confirmacion-boton'>
      <a href='cliente.php'>Volver al inicio</a>
    </div>
  </div>
";
