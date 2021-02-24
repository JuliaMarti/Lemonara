<?php
session_start();



$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';




if (!empty($usuario) && !empty($password)) {

    require_once 'clases/DB.php';
    require_once 'php/funciones.php';

    $sql = "SELECT usuario FROM usuarios WHERE usuario = '$usuario' AND password='$password'";



    $stmt = DB::getStatement($sql);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $_SESSION['usuario_logueado'] = $usuario;

        header('Location: productos_listado.php');
        die;
    } else {
        $alertParaUsuario = getHtmlAlert('Usuario y/o contraseña incorrectos.', 'alert-danger');
    }

}

$titulo = 'Proyecto Integrador';
include 'includes/header_backend.php';
?>
    <h1>Lemonara</h1>
<?php
echo $alertParaUsuario ?? '';
include 'includes/index_form.php';

include 'includes/footer_backend.php';