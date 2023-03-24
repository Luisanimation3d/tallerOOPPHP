<?php
require 'modelo.php';
require 'session.php';


$datos = $_SESSION['crudMilitar'];

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$hijoUnico = $_POST['hijoUnico'];

$newDato = new Militar(uniqid(),$name, $age, $gender, $hijoUnico);

$datos[] = $newDato;

$_SESSION['crudMilitar'] = $datos;


var_dump($newDato);

echo '<br>Testing<br>';

print_r($datos);

echo '<br>Testing<br>';

print_r($_SESSION['crudMilitar']);


// session_destroy();
header('location: index.php?');

exit();