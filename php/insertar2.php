<?php

include "conexion.php";

$nombre = $_POST ['nombre'];
$telefono = $_POST ['telefono'];
$correo = $_POST ['correo'];
$sugerencia = $_POST ['sugerencia'];

$sql = "INSERT INTO contacto (nombre, telefono, correo, sugerencia)
VALUES ('$nombre', '$telefono', '$correo', '$sugerencia')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "los datos se han enviado correctamente";
 echo '
        <script>
        alert("Gracias por tu sugerencia!");
        location.href= "../php/cliente.php";
        </script>       
        ';
   
}


?>


