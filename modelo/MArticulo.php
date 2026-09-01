<?php
/* =====================================
         MODELO ARTICULO
====================================== */

// CLASES REQUERIDAS
require_once('modelo/db/ConexionPDO.php');

// CLASE MODELO
class MArticulo
{
    // ATRIBUTOS
    public $idArticulo;
    public $nombre;
    public $descripcion;
    public $cantidad;
    public $estado;


    // OBTENER ARTÍCULOS
    public static function all()
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('SELECT * FROM articulo WHERE (estado=1) ORDER BY idArticulo DESC');
        $consulta->execute();
        $articulos = $consulta->fetchAll();
        return $articulos;
    }

    // OBTENER ARTÍCULOS POR CRITERIO
    public static function search($criterio)
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('SELECT * FROM articulo WHERE (estado=1) AND (nombre LIKE "%' . $criterio . '%" OR descripcion LIKE "%' . $criterio . '%" OR cantidad LIKE "%' . $criterio . '%")  ORDER BY idArticulo DESC');
        $consulta->execute();
        $articulos = $consulta->fetchAll();
        return $articulos;
    }

    // OBTENER ARTÍCULO
    public static function find($id)
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('SELECT * FROM articulo WHERE (estado=1) AND (idArticulo = ' . $id . ')');
        $consulta->execute();
        $fila = $consulta->fetch();
        // SE CREA EL OBJETO
        $articulo = new MArticulo();
        $articulo->idArticulo = $fila['idArticulo'];
        $articulo->nombre = $fila['nombre'];
        $articulo->descripcion = $fila['descripcion'];
        $articulo->cantidad = $fila['cantidad'];
        $articulo->estado = $fila['estado'];

        return $articulo;
    }

    // METODO SAVE
    public function save()
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('INSERT INTO articulo(nombre,descripcion,cantidad,estado) VALUES (?,?,?,?)');
        $consulta->execute(array($this->nombre, $this->descripcion, $this->cantidad, $this->estado));
    }

    // METODO UPDATE
    public function update($id)
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('UPDATE articulo SET nombre = ?, descripcion = ?, cantidad = ?, estado = ? WHERE idArticulo = ?');
        $consulta->execute(array($this->nombre, $this->descripcion, $this->cantidad, $this->estado, $id));
    }

    // METODO DELETE
    public function delete($id)
    {
        $conexion = ConexionPDO::openConexion();
        $consulta = $conexion->prepare('UPDATE articulo SET estado = ? WHERE idArticulo = ?');
        $consulta->execute(array($this->estado, $id));
    }
}
