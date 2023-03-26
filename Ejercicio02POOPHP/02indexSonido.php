<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>
    <div class="container" >
    <nav class="navbar bg-blue  "  >
            <a class="navbar-brand" href="02indexMain.php"  >
                <img src="pictures/logo3.webp" alt="Logo" width="70" height="64" class="rounded-circle" >
                Samsung Electrodomésticos
            </a>
        
    </nav>
    <h2>Equipos de Sonido</h2>

    <?php
        require "02controSonido.php";
    ?>

    <?php if (isset($_POST['editar'])) { ?>
        <?php $id = intval($_POST['id']); ?>
        <?php $sonido = $sonidos[$id]; ?>

        <h2>Editar</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="referencia">Referencia:</label>
                <input type="text" name="referencia" value="<?php echo $sonido->getReferencia(); ?>" required class="form-control" aria-label="Sizing example input">

            <label for="cantidadStock">Cantidad en Stock:</label>
                <input type="number" name="cantidadStock" value="<?php echo $sonido->getCantidadStock(); ?>" required class="form-control" aria-label="Sizing example input">

            <label for="precio">Precio:</label>
                <input type="number" name="precio" value="<?php echo $sonido->getPrecio(); ?>" required class="form-control" aria-label="Sizing example input">

            <label for="peso">Peso:</label>
                <input type="text" name="peso" value="<?php echo $sonido->getPeso(); ?>" required class="form-control" aria-label="Sizing example input"><br>

            <button type="submit" name="actualizar" class="btn btn-info">Actualizar</button>
        </form>
    <?php } ?>
    <br>

    <?php if (isset($_POST['nuevo'])) { ?>
        <h2>Crear</h2>
        <form method="POST">
            <label for="referencia">Referencia:</label>
                <input type="text" name="referencia" required class="form-control" aria-label="Sizing example input">

            <label for="cantidadStock">Cantidad en Stock:</label>
                <input type="number" name="cantidadStock" required class="form-control" aria-label="Sizing example input">

            <label for="precio">Precio:</label>
                <input type="number" name="precio" required class="form-control" aria-label="Sizing example input">

            <label for="peso">Peso:</label>
                <input type="text" name="peso" required class="form-control" aria-label="Sizing example input"><br>

            <button type="submit" name="crear" class="btn btn-info">Crear</button>
        </form>
    <?php } ?>
    <br>

    <?php if (isset($_POST['vender'])) { ?>
        <?php $id = intval($_POST['id']); ?>
        <?php $sonido = $sonidos[$id]; ?>
        <h2>Vender</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="referencia">Referencia:</label>
                <input type="text" name="referencia" value="<?php echo $sonido->getReferencia(); ?>" readonly class="form-control" aria-label="Sizing example input">

            <label for="cantidadStock">Cantidad en Stock:</label>
                <input type="number" name="cantidadStock" value="<?php echo $sonido->getCantidadStock(); ?>" readonly  class="form-control" aria-label="Sizing example input">

            <label for="precio">Precio:</label>
                <input type="number" name="precio" value="<?php echo $sonido->getPrecio(); ?>" readonly  class="form-control" aria-label="Sizing example input">

            <label for="peso">Peso:</label>
                <input type="text" name="peso" value="<?php echo $sonido->getPeso(); ?>" readonly  class="form-control" aria-label="Sizing example input">

            <label for="cantidad">Cantidad a Comprar:</label>
                <input type="number" name="cantidad" readonly  class="form-control" required aria-label="Sizing example input" ><br>

            <button type="submit" name="confirmar" class="btn btn-info">Confirmar</button>
        </form>
    <?php } ?>
    <br>

    <form method="POST">
        <button type="submit" name="nuevo" class="btn btn-success">Nuevo</button>
    </form>
    
    <h2>Listado de Equipos de Sonido</h2>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Referencia</th>
                <th>Cantidad en Stock</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sonidos as $id => $sonido) { ?>
                <tr>
                    <td> <?php echo $sonido->getReferencia(); ?></td>
                    <td> <?php echo $sonido->getCantidadStock(); ?></td>
                    <td> <?php echo $sonido->getPrecio(); ?></td>
                    <td> <?php echo $sonido->getPeso(); ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button type="submit" name="editar" class="rounded-start-pill border border-white">Editar</button>
                            <button type="submit" name="eliminar" class="rounded-start-2 border border-white">Eliminar</button>
                            <button type="submit" name="vender" class="rounded-end-circle border border-white">Vender</button>
                        </form> 
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table><br>
    <div>
        <a href="../indexprincipal.html" class="btn btn-success">Volver al menú</a>
    </div>
  </div> 


    
</body>
</html>