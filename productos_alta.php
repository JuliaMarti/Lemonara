<?php


$titulo = 'Alta de productos';

session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header('Location: index.php');
    die;
}


require_once 'php/funciones.php';

function initVariables () {
    global $nombre, $precio, $stock, $categoria, $descripcion, $observaciones, $imagen;
    $nombre = '';
    $precio = '';
    $stock = '';
    $categoria = '';
    $descripcion = '';
    $observaciones = '';
    // $imagen= '';
}


// Se inicializan las variables que se utilizarán en el formulario de alta
initVariables();

$errores = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'php/validar.php';

    // Si hubo errores de validación
    if ($errores !== '') {
        $alertParaUsuario = getHtmlAlert($errores, 'alert-danger');
    } else {

        require_once 'clases/DB.php';


        $sql = "
            INSERT INTO productos
            (
                nombre,
                precio,
                stock,
                id_categoria,
                descripcion,
                observaciones,
                imagen
            )
            VALUES
            (
                '$nombre',
                $precio,
                $stock,
                $categoria,
                '$descripcion',
                '$observaciones',
                '$imagen'
            )
        ";


        $stmt = DB::getStatement($sql);
        $stmt->execute();


        // Si no hubo errores de validación
        $alertParaUsuario = getHtmlAlert('El producto fue dado de alta con éxito.', 'alert-success');

        // Se resetean las variables para que el formulario aparezca vacío para seguir cargando otros productos
        initVariables();
    }
}

include 'includes/header_backend.php';

include 'includes/productos_alta_form.php';

include 'includes/footer_backend.php';

?>

