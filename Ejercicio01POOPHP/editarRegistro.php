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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./actualizarController.php" method="POST">
        <input type="hidden" name="position" value="<?php echo $key;?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre y apellidos</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre completo" value="<?php echo $datos[$key]->getNameLastName(); ?>">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Edad</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Ingresa tu Edad" value="<?php echo $datos[$key]->getAge(); ?>">
        </div>
        <select class="form-select form-select-lg mb-3" name="gender" aria-label=".form-select-lg example">
            <option value="male" <?php echo $datos[$key]->getGender() == "male" ? 'selected' : '' ?>>Masculino</option>
            <option value="female" <?php echo $datos[$key]->getGender() == "female" ? 'selected' : '' ?>>Femenino</option>
            <option value="other" <?php echo $datos[$key]->getGender() == "other" ? 'selected' : '' ?>>Otro</option>
        </select>
        <select class="form-select form-select-lg mb-3" name="hijoUnico" aria-label=".form-select-lg example">
            <option value="Si" <?php echo $datos[$key]->getHijoUnico() == true ? 'selected' : '' ?>>Si</option>
            <option value="No" <?php echo $datos[$key]->getHijoUnico() == false ? 'selected' : '' ?>>No</option>
        </select>
        <button type="submit" class="btn btn-primary">Actualizar Registro</button>
    </form>
</body>

</html>