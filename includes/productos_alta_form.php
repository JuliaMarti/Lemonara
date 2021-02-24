


<main class="container">
<br>
<h1><?=$titulo?></h1>


<?php echo $alertParaUsuario ?? ''; ?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-lg-8 col-md-8 col-sm-6 col-12">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" autofocus value="<?= $nombre ?>">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-3 col-6">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="<?= $precio ?>">
        </div>
        <div class="form-group col-lg-2 col-md-2 col-sm-3 col-6">
            <label for="stock">Stock</label>
            <input type="text" class="form-control" id="stock" name="stock" value="<?= $stock ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="categoria">Categoría</label>
            <select id="categoria" name="categoria" class="form-control">
                <option value="">Seleccioná una categoría</option>
                <?php include 'includes/productos_alta_categorias_options.php'; ?>
            </select>
        </div>
    </div>


    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"><?= $descripcion ?></textarea>
    </div>

    <div class="form-group">
        <label for="obervaciones">Observaciones</label>
        <textarea class="form-control" id="obervaciones" name="obervaciones" rows="3"><?= $observaciones ?></textarea>
    </div>

    <div class="form-group col-lg-2 col-md-2 col-sm-3 col-6">
        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" name="imagen" >
    </div>

    <button type="submit" class="btn btn-success">Enviar</button>
    <button type="reset" class="btn btn-secondary">Restablecer</button>
</form>


        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</main>

