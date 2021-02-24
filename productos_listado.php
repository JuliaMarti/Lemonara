<?php

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header('Location: index.php');
    die;
}


$titulo = 'Listado de productos';



require_once 'clases/DB.php';
require_once 'clases/Producto.php';
require_once 'clases/Categoria.php';

// Si no usara PDO podría hacer una llamada de este estilo
// $sql = 'SELECT
// 	p.id_producto,
//     p.nombre,
//     p.precio,
//     p.stock,
//     c.nombre categoria,
//     p.descripcion,
//     p.observaciones,
//     p.imagen
// FROM
// 	productos p
//     JOIN categorias c ON p.id_categoria = c.id_categoria
// ORDER BY categoria, p.nombre';


$sql = 'SELECT
	p.id_producto,
    p.nombre,
    p.precio,
    p.stock,
    p.id_categoria,
    p.descripcion,
    p.observaciones,
    p.imagen
FROM
	productos p';

$stmt = DB::getStatement($sql);
$stmt->execute();

$productos = $stmt->fetchAll(PDO::FETCH_CLASS, 'Producto');


$cantidad_de_filas = $stmt->rowCount();

include 'includes/header_backend.php';
?>
    <h1>Listado de productos</h1>
    <br>
<?php
if ($cantidad_de_filas > 0) {
    include 'includes/productos_listado_table.php';
} else {
    ?>
    <p>No se encontró ningún producto.</p>
    <p><a href="productos_alta.php">Creá un nuevo producto</a>.</p>
    <?php
}

include 'includes/footer.php';





