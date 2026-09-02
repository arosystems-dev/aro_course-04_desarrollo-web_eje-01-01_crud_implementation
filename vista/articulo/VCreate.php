<!-- =====================================
            VISTA CREATE ARTICULO
====================================== -->

<h2>NUEVO ARTICULO</h2>
<br>
<form action="?control=CArticulo&accion=store" method="post" class="formControl">
    <!-- DATOS -->
    <div class="row">
        <div class="col col-lg-5 col-sm-10">
            <input type="text" id="tbNombre" name="tbNombre" placeholder="Nombre..." required class="textBoxControl w-lg-10"><br>
            <input type="text" id="tbDescripcion" name="tbDescripcion" placeholder="Descripción..." class="textBoxControl w-lg-10"><br>
            <input type="number" id="tbCantidad" name="tbCantidad" placeholder="Cantidad..." required class="textBoxControl w-lg-10"><br>
        </div>
    </div>
    <br>
    <!-- BOTON -->
    <div class="row">
        <input type="submit" value="Guardar" class="btnControl btnColorSave">
        <a href="?control=CArticulo&accion=index">
            <input type="button" value="Cancelar" class="btnControl btnColorCancel">
        </a>
    </div>

</form>