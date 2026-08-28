<?php
include 'conexion.php'; 


$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$almacen = $_POST['almacen'];
 

 $sql = "INSERT INTO inventario (nombre, categoria, cantidad, precio, almacen) 
VALUES ('$nombre', '$categoria', '$cantidad', '$precio', '$almacen')";


if ($conn->query($sql) === TRUE) {
    echo "producto guardado exitosamente.";
} else {
    echo "Error: " . $conn->error;
}
  echo '
    <script>
    alert("Volver");
    location.href= "../php/form-inventario.php";
    </script>       
    '; 

?>
