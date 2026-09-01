<!-- =====================================
            VISTA EDIT ARTICULO
====================================== -->

<h2>EDITAR ARTICULO</h2>
<br>
<form action="?control=CArticulo&accion=update&id=<?php echo $articulo->idArticulo ?>" method="post" class="formControl">
    <!-- DATOS -->
    <div class="row">
        <div class="col col-lg-5 col-sm-10">
            <input type="text" id="tbNombre" name="tbNombre" placeholder="Nombre..." value="<?php echo $articulo->nombre ?>" required class="textBoxControl w-lg-10"><br>
            <input type="text" id="tbDescripcion" name="tbDescripcion" placeholder="Descripción..." value="<?php echo $articulo->descripcion ?>" class="textBoxControl w-lg-10"><br>
            <input type="number" id="tbCantidad" name="tbCantidad" placeholder="Cantidad..." value="<?php echo $articulo->cantidad ?>" class="textBoxControl w-lg-10"><br>
        </div>
    </div>
    <br>
    <!-- BOTON -->
    <div class="row">
        <input type="submit" value="Actualizar" class="btnControl btnColorUpdate">
        <a href="?control=CArticulo&accion=index">
            <input type="button" value="Cancelar" class="btnControl btnColorCancel">
        </a>
    </div>

</form>