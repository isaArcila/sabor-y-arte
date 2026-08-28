<?php
include 'conexion.php';

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$direccion = $_POST ['direccion'];
$pago = $_POST ['pago'];
$pass = $_POST ['pass'];
$rol = $_POST ['rol'];

$sql = "INSERT INTO registro (nombre, email, direccion, pago, pass, rol)
    VALUES ('$nombre', '$email', '$direccion', '$pago', '$pass', '$rol')";

$query = mysqli_query($conn, $sql);

if ($rol === 'administrador') {
        header('Location: ../php/forms2.php');
    } elseif ($rol === 'cliente') {
        header('Location: ../php/forms2.php');
    } elseif ($rol === 'empleado') {
        header('Location: ../php/forms2.php');
       
} else {
    echo "<script>alert('Error al registrar. Inténtalo de nuevo.'); location.href='../php/forms.php';</script>";
}
?>
?>