<?php
/* =====================================
         CONTROL ARTICULO
====================================== */

// CLASES REQUERIDAS
require_once('modelo/MArticulo.php');

// CLASE CONTROL
class CArticulo
{
    public function index()
    {
        $articulos = MArticulo::all();
        include_once('vista/articulo/Vindex.php');
    }

    public function search($criterio)
    {
        $articulos = MArticulo::search($criterio['tbBuscar']);
        include_once('vista/articulo/Vindex.php');
    }

    public function create()
    {
        include_once('vista/articulo/Vcreate.php');
    }

    public function store($datos)
    {
        $articulo = new MArticulo();
        $articulo->nombre = $datos['tbNombre'];
        $articulo->descripcion = $datos['tbDescripcion'];
        $articulo->cantidad = $datos['tbCantidad'];
        $articulo->estado = 1;
        $articulo->save();
        header('Location:./?control=CArticulo&accion=index');
    }

    public function edit($id)
    {
        $articulo = MArticulo::find($id);
        include_once('vista/articulo/VEdit.php');
    }

    public function update($datos, $id)
    {
        $articulo = MArticulo::find($id);
        $articulo->nombre = $datos['tbNombre'];
        $articulo->descripcion = $datos['tbDescripcion'];
        $articulo->cantidad = $datos['tbCantidad'];
        $articulo->estado = 1;
        $articulo->update($id);
        header('Location:./?control=CArticulo&accion=index');
    }

    public function destroy($id)
    {
        $articulo = MArticulo::find($id);
        $articulo->estado = 0;
        $articulo->delete($id);
        header('Location:./?control=CArticulo&accion=index');
    }
}
