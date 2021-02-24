<?php

if (isset($_POST['nombre'])) {
    $nombre = trim($_POST['nombre']);
}
if (isset($_POST['precio'])) {
    $precio = trim($_POST['precio']);
}
if (isset($_POST['stock'])) {
    $stock = trim($_POST['stock']);
}
if (isset($_POST['categoria'])) {
    $categoria = trim($_POST['categoria']);
}

if (isset($_POST['descripcion'])) {
    $descripcion = trim($_POST['descripcion']);
}
if (isset($_POST['observaciones'])) {
    $envio = trim($_POST['envio']);
}


$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));




$nombreLargoMinimo = 3;
$nombreLargoMaximo = 30;
$nombreLargo = strlen($nombre);

if ($nombre === '') {
    $errores .= 'El nombre no puede estar vacío.<br>';
} elseif ($nombreLargo < $nombreLargoMinimo) {
    $errores .= "El nombre debe contener al menos $nombreLargoMinimo caracteres.<br>";
} elseif($nombreLargo > $nombreLargoMaximo) {
    $errores .= "El nombre debe contener $nombreLargoMaximo caracteres como máximo.<br>";
}

if ($precio === '') {
    $errores .= 'El precio no puede estar vacío.<br>';
} elseif (!is_numeric($precio)) {
    $errores .= 'El precio debe contener un valor numérico.<br>';
} elseif($precio <= 0) {
    $errores .= 'El precio debe contener un valor positivo.<br>';
}


if ($stock === '') {
    $errores .= 'El stock no puede estar vacío.<br>';
} elseif(!is_numeric($stock)) {
    $errores .= 'El stock debe contener un valor numérico.<br>';
} else {
    $stock += 0;
    if (!is_int($stock)) {
        $errores .= 'El stock debe contener un valor entero.<br>';
    }
}

require 'php/validar_categoria.php';

if ($categoria === '') {
    $errores .= 'La categoría no puede estar vacía.<br>';
} else if (!in_array($categoria, $categorias_validas)) {
    $errores .= 'El valor de la categoría no es válido.<br>';
}
