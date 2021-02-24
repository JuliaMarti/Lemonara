<?php

require_once 'DB.php';
require_once 'Categoria.php';

class Producto
{
    public $id_producto;
    public $nombre;
    public $id_categoria;
    public $precio;
    public $stock;
    public $garantia;
    public $detalles;

	static function getById($id_producto)
	{
		$stmt = DB::getStatement('SELECT * FROM productos WHERE id_producto = :id_producto');
		$stmt->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
		$stmt->execute();
		if ($stmt->rowCount() === 1) {
		    return $stmt->fetchObject('Producto');
        }
		return null;
    }
    
    public function getCategoria()
    {
        $categoria = Categoria::getById($this->id_categoria);
        if ($categoria) {
            return $categoria;
        }
        return null;
    }

    public function getCategoriaNombre()
    {
        $categoria = $this->getCategoria();
        if ($categoria) {
            return $categoria->nombre;
        }
        return '';
    }


    public function getPrecioFormateado()
    {
        return '$' . number_format($this->precio, 2, ',', '.');
    }

}