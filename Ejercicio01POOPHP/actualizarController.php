<?php
require 'modelo.php';
require 'session.php';


$datos = $_SESSION['crudMilitar'];


$position = intval($_POST['position']);
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$hijoUnico = $_POST['hijoUnico'];

$datos[$position]->setNameLastName($name);
$datos[$position]->setAge($age);
$datos[$position]->setGender($gender);
$datos[$position]->setHijoUnico($hijoUnico);

$_SESSION['crudMilitar'] = $datos;


var_dump($newDato);

echo '<br>Testing<br>';

print_r($datos);

echo '<br>Testing<br>';

print_r($_SESSION['crudMilitar']);


// session_destroy();
header('location: indexTV.php?');

exit();