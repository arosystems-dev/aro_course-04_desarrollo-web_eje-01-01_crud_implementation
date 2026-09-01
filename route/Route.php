<?php
/* =======================================
                ROUTES
======================================= */

// CLASES REQUERIDAS
require('control/CPrincipal.php');
require('control/CArticulo.php');

// VARIABLES DE PETICION
$control = $_GET['control'] ?? 'CPrincipal';
$accion = $_GET['accion']  ?? 'inicio';
$id = $_GET['id'] ?? null;

/*------------------------------------------
            RUTAS PRINCIPAL
------------------------------------------*/
if ($control === 'CPrincipal' && $accion === 'inicio') {
    $control = new CPrincipal();
    $control->showVInicio();
}

/*------------------------------------------
            RUTAS ARTÍCULO
------------------------------------------*/
if ($control === 'CArticulo' && $accion === 'index') {
    $control = new CArticulo();
    $control->index();
} else

if ($control === 'CArticulo' && $accion === 'search') {
    $control = new CArticulo();
    $control->search($_POST);
} else

if ($control === 'CArticulo' && $accion === 'create') {
    $control = new CArticulo();
    $control->create();
} else

if ($control === 'CArticulo' && $accion === 'store') {
    $control = new CArticulo();
    $control->store($_POST);
} else

if ($control === 'CArticulo' && $accion === 'edit') {
    $control = new CArticulo();
    $control->edit($id);
} else

if ($control === 'CArticulo' && $accion === 'update') {
    $control = new CArticulo();
    $control->update($_POST, $id);
} else

if ($control === 'CArticulo' && $accion === 'destroy') {
    $control = new CArticulo();
    $control->destroy($id);
}
