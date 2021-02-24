<?php
    require_once 'clases/DB.php';
    
    require_once 'clases/Categoria.php';
    require_once 'php/funciones.php';


    $sql = 'SELECT id_categoria FROM categorias';


    $stmt = DB::getStatement($sql);
    $stmt->execute();


    $categorias = $stmt->fetchAll(PDO::FETCH_CLASS, 'Categoria');
    $categorias_validas = [];

    foreach ($categorias as $unaCategoria) {

    $categorias_validas[] = $unaCategoria->id_categoria;
}
