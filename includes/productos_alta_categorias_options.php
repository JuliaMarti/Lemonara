<?php


require_once 'clases/DB.php';
require_once 'clases/Categoria.php';

$id_producto = $_GET['id_producto'];

$sql = 'SELECT id_categoria, nombre FROM categorias ORDER BY nombre';

$stmt = DB::getStatement($sql);
$stmt->execute();


$categorias = $stmt->fetchAll(PDO::FETCH_CLASS, 'Categoria');

foreach ($categorias as $unaCategoria) {

    $optionSelected = '';
    if ($categoria === $unaCategoria ->id_categoria) {
        $optionSelected = 'selected';
    }
    echo '<option value="' .  $unaCategoria ->id_categoria . '" ' . $optionSelected . '>'
        . $unaCategoria->nombre.'</option>';
}
