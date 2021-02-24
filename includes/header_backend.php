<?php
$usuario_logueado = '';
if (isset($_SESSION['usuario_logueado'])) {
    $usuario_logueado = '(' . $_SESSION['usuario_logueado'] . ')';
}

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lemonara">
    <title><?= $titulo ?? 'Lemonara' ?></title>





    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Archivo CSS del proyecto-->
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">Lemonara</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra" aria-controls="barra" aria-expanded="false" aria-label="Altenar barra de navegación">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="barra">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menu-productos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                <div class="dropdown-menu" aria-labelledby="menu-productos">
                    <a class="dropdown-item" href="productos_alta.php">Alta</a>
                    <a class="dropdown-item" href="productos_listado.php">Listado detallado</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="front.php">Ir a la Página</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="php/salir.php">Salir <?= $usuario_logueado ?></a>
            </li>
        </ul>

    </div>
</nav>

<main role="main" class="container">