<?php


require 'modelo.php';
require 'session.php';

$datos = $_SESSION['crudMilitar'];

$id = $_GET['id'];

foreach ($datos as $index => $dato) {
    if($dato->getId() == $id) {
        $key = $index;
        break;
    }
}

unset($datos[$key]);

$_SESSION['crudMilitar'] = $datos;

header('location: indexTV.php?id');

exit();

?>