<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM registro WHERE id = $id";
    $conn->query($sql);
}

header("Location: ../php/tablas.php");
?>