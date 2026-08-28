<?php
include 'conexion.php'; 


$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen=  addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$categoria=$_POST['categoria'];
 


 $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen, categoria) 
VALUES ('$nombre', '$descripcion', '$precio', '$imagen', '$categoria')";


if ($conn->query($sql) === TRUE) {
    echo "producto guardado exitosamente.";
} else {
    echo "Error: " . $conn->error;
}
  echo '
    <script>
    alert("Volver");
    location.href= "../php/form.php";
    </script>       
    '; 

?>
