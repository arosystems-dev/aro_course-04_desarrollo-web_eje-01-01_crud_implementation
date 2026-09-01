<!-- =====================================
            VISTA INDEX ARTICULO
====================================== -->

<h2>GESTIONAR ARTICULOS</h2>
<br>

<!-- SECTOR DE BUSQUEDA Y NUEVO REGISTRO -->
<div class="row">
    <div class="col-lg-10">
        <form action="?control=CArticulo&accion=search" method="post" class="formControl">
            <div class="row">
                <input type="text" id="tbBuscar" name="tbBuscar" placeholder="Buscar..." class="textBoxControl w-lg-5">
                <input type="submit" value="Buscar" class="btnControl btnColorSave">
                <a href="?control=CArticulo&accion=create">
                    <button class="btnControl btnColorNew col-lg-2" type="button">
                        Nuevo
                    </button>
                </a>
            </div>
        </form>
    </div>
</div>
<br>

<!-- SECTOR DE DATOS -->
<div class="row">
    <div class="col-lg-10">
        <table>
            <thead>
                <th class="w-lg-1">ID</th>
                <th class="w-lg-2">NOMBRE</th>
                <th class="w-lg-3 descripcion">DESCRIPCIÓN</th>
                <th class="w-lg-2">CANTIDAD</th>
                <th class="w-lg-2">OPCIONES</th>
            </thead>&nbsp;
            <tbody>
                <?php
                foreach ($articulos as $a) {
                    echo ('
                  <tr>                    
                    <td class="w-lg-1 textCenter">' . $a['idArticulo'] . '</td>
                    <td class="w-lg-2">' . $a['nombre'] . '</td>
                    <td class="w-lg-3 descripcion">' . $a['descripcion'] . '</td>
                    <td class="w-lg-2 textCenter">' . $a['cantidad'] . '</td>
                    <td class="w-lg-2 textCenter"> 
                        <a class="imgEditar" href="?control=CArticulo&accion=edit&id=' . $a['idArticulo'] . '">
                            <img src="vista/public/img/editar.png" alt="Editar">
                        </a>&nbsp;&nbsp;&nbsp;
                        <a class="imgEliminar" href="?control=CArticulo&accion=destroy&id=' . $a['idArticulo'] . '">                           
                            <img src="vista/public/img/eliminar.png" alt="Eliminar">
                        </a>
                    </td>
                  </tr>
                 ');
                }
                ?>
            </tbody>
        </table>
    </div>
</div>