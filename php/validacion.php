<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$pass   = $_POST['pass'];

$verificacion = mysqli_query($conn, "SELECT * FROM registro 
WHERE nombre='$nombre' AND pass='$pass'");

if (mysqli_num_rows($verificacion) == 1) {
    session_start();
    $fila = mysqli_fetch_assoc($verificacion);

  
    $_SESSION['id']        = $fila['id'];
    $_SESSION['rol']       = $fila['rol'];
    $_SESSION['nombre']    = $fila['nombre'];
    $_SESSION['pass']      = $fila['pass']; 
    $_SESSION['email']     = $fila['email'];
    $_SESSION['direccion'] = $fila['direccion'];
    $_SESSION['telefono']  = $fila['telefono'];
    $_SESSION['pago']      = $fila['pago'];


    if ($fila['rol'] == 'administrador') {
        header('Location: ../php/admin.php');
        exit();
    } elseif ($fila['rol'] == 'cliente') {
        header('Location: ../php/cliente.php');
        exit();
    } elseif ($fila['rol'] == 'empleado') {
        header('Location: ../php/empleado.php');
        exit();
    }
} else {
    echo '
    <script>
        alert("Error. ¡Regístrate!");
        location.href = "../php/forms.php";
    </script>
    ';
}
?>
