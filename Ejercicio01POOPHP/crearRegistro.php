<?php

require 'modelo.php';
require 'session.php';


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
    <form action="./registroController.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nombre y apellidos</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre completo">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Edad</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Ingresa tu Edad">
        </div>
        <select class="form-select form-select-lg mb-3" name="gender" aria-label=".form-select-lg example">
            <option value="male">Masculino</option>
            <option value="female">Femenino</option>
            <option value="other">Otro</option>
        </select>
        <select class="form-select form-select-lg mb-3" name="hijoUnico" aria-label=".form-select-lg example">
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        <button type="submit" class="btn btn-primary">Crear Registro</button>
    </form>
</body>

</html>