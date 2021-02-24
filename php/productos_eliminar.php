<?php

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header('Location: ../index.php');
    die;
}



require_once 'clases/DB.php';


$id_producto = $_GET['id_producto'];

$sql = 'DELETE FROM productos WHERE id_producto = ' . $id_producto;

$stmt = DB::getStatement($sql);
$stmt->execute();

header('Location: ../assets/includes/productos_listado.php');