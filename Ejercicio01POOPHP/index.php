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
    <title>Listar</title>
</head>

<body>
    <a href="./crearRegistro.php">Crear Registro</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Genero</th>
                <th scope="col">Cumple</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $datos = $_SESSION['crudMilitar'];
            foreach ($datos as $dato) {
            ?>
                <tr>
                    <td><?php echo $dato->getNameLastName(); ?></td>
                    <td><?php echo $dato->getAge(); ?></td>
                    <td><?php echo $dato->getGender(); ?></td>
                    <td><?php echo $dato->validar(); ?></td>
                    <td>
                        <a href="./editarRegistro.php?id=<?php echo $dato->getId(); ?>">Editar</a>
                        <a href="./borrarRegister.php?id=<?php echo $dato->getId(); ?>">Borrame</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>

<?php
//  session_destroy(); 
?>