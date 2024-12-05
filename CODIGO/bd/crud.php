<?php
include_once 'conexion.php';
include_once 'mostrar.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$pais = (isset($_POST['pais'])) ? $_POST['pais'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';

switch ($opcion) {
    case 1:
        Mostrar::insertar($id, $nombre, $pais, $edad, $conexion);
        $data = Mostrar::listar($conexion);  
    break;
    case 2:
        Mostrar::modificar($id, $nombre, $pais, $edad, $conexion);
        $data = Mostrar::listar($conexion);
        break;
    case 3:
        Mostrar::eliminar($id, $conexion);
        $data = Mostrar::listar($conexion);
        break;
    case 5:
        $data = Mostrar::listar($conexion);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE); 
$conexion = NULL;