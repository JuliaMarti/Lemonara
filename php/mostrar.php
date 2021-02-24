<?php




require_once 'clases/DB.php';
require_once 'clases/Producto.php';


$sql = 'SELECT 
nombre, 
id_categoria,
precio,
stock,
descripcion,
imagen
FROM productos';


$stmt = DB::getStatement($sql);
$stmt->execute();


$productos = $stmt->fetchAll(PDO::FETCH_CLASS, 'Producto');


foreach ($productos as $unProducto) {


    ?>
    <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $unProducto->getCategoriaNombre() ;?>">
        <div class="portfolio-wrap">
            <img src="data:image/jpg;base64,<?php echo base64_encode($unProducto->imagen );?>" class="img-portfolio" alt="">
            <div class="portfolio-info">
                <h4><?= $unProducto->nombre;?></h4>
                <p><?= $unProducto->descripcion;?></p>
                <div class="portfolio-links">
                    <a href="#" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php
} ?>