<?php
session_start();
include 'conexion.php';

$id = $_SESSION['id'] ?? '';
$nombre = $_SESSION['nombre'] ?? '';
$email = $_SESSION['email'] ?? '';
$direccion = $_SESSION['direccion'] ?? '';
$telefono = $_SESSION['telefono'] ?? '';
$pago = $_SESSION['pago'] ?? '';
$pass = $_SESSION['pass'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $campo = $_POST['campo'];
    $valor = $_POST['valor'];

    $sql = "UPDATE registro SET $campo='$valor' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION[$campo] = $valor; 
        $mensaje = "Guardado con éxito";
    } else {
        $mensaje = "Error: " . mysqli_error($conn);
    }
}

 header('Location: ../php/perfil-empl.php');
?>