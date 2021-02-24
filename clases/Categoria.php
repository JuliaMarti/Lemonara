<?php

require_once 'DB.php';

class Categoria
{
	public $id_categoria;
	public $nombre;

	static function getById($id_categoria)
	{
		$stmt = DB::getStatement('SELECT * FROM categorias WHERE id_categoria = :id_categoria');
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		if ($stmt->rowCount() === 1) {
		    return $stmt->fetchObject('Categoria');
        }
		return null;
	}

	public function getDatos()
	{
		return "<strong>Id:</strong> $this->id_categoria<br>"
		    . "<strong>Nombre:</strong> $this->nombre<br>";
	}

}