<table class="table table-striped table-bordered table-sm">
    <tr class="text-nowrap">
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Categoria</th>
        <th>Descripción</th>
        <th>Observaciones</th>
        <th>Foto</th>
    </tr>
    <?php


    foreach ($productos as $unProducto) {

        ?>
        <tr>
            <td class="text-center"><?= $unProducto->nombre ?></td>
            <td class="text-right"><?= $unProducto-> getPrecioFormateado() ?></td>
            <td class="text-right"><?= $unProducto->stock ?></td>
            <td class="text-center"><?= $unProducto-> getCategoriaNombre(); ?></td>
            <td class="text-center"><?= $unProducto->descripcion ?></td>
            <td class="text-center"><?= $unProducto->observaciones ?></td>
            <td class="td-img"><img src="data:image/jpg;base64,<?php echo base64_encode($unProducto->imagen);?>" class="img-table" alt=""></td>
            <td>
                <br>
                <a onclick="return confirm('¿Estás seguro de querer eliminar este producto?');" href="="php/productos_eliminar.php?id_producto=<?= $unProducto->id_producto ?>">Eliminar</a>
            </td>
        </tr>
        <?php
    }

    ?>
    <tr>
        <td colspan="12" class="text-center">Se encontraron <?= $cantidad_de_filas ?> resultados</td>
    </tr>
</table>