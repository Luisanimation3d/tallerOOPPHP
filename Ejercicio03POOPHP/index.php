<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require 'controladorAccion.php';
    ?>
    <h2>Registro de peliculas de accion</h2>

    <?php if (isset($_POST['editar'])){?>
        <?php $id=intval($_POST['id']);?>
        <?php $pelicula=($Peliculas[$id]);?>

        <h2>Editar</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">

            <label for="Titulo">Titulo</label>
            <input type="text" name="Titulo" value="<?php echo $pelicula->getTitulo();?>">

            <label for="anio">Año</label>
            <input type="text" name="anio" value="<?php echo $pelicula->getAnio();?>">

            <select name="genero" value="<?php echo $pelicula->getGenero();?>">
              <option value="Accion">Accion</option>
              <option value="Drama">Drama</option>
              <option value="Ficcion">Ficcion</option>
              <option value="Comedia">Comedia</option>
            </select>

            <button type="submit" name="actualizar">Actualizar</button>
        </form>
        <?php } ?>

        <?php if(isset($_POST['nuevo'])){?>
            <form method="post">
            <label for="Titulo">Titulo</label>
            <input type="text" name="Titulo">

            <label for="anio">Año</label>
            <input type="text" name="anio" require>

            <select name="genero">
              <option value="Accion">Accion</option>
              <option value="Drama">Drama</option>
              <option value="Ficcion">Ficcion</option>
              <option value="Comedia">Comedia</option>
            </select>

            <button type="submit" name="crear">Crear</button>
            </form>
        
        <?php } ?>
        <form method="post">
            <button type="submit" name="nuevo">Nuevo</button>

        </form>

        <h2>Lista de peliculas de accion</h2>

        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Año</th>
                    <th>Genero</th>
                    
                </tr>
            </thead>
        </table>
        <tbody>
            <?php foreach($Peliculas as $id=> $pelicula){ ?>
                <tr>
                    <td><?php echo  $pelicula->getTitulo();?></td>
                    <td><?php echo $pelicula->getAnio();?></td>
                    <td><?php echo $pelicula->getGenero();?></td>

                    <td>
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo $id;?> ">
                            <button type="submit" name="editar">Editar</button>
                            <button type="submit" name="eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
        </table>
        <?php 
        $contadorAccion=0;
        $contadorDrama=0;
        $contadorFiccion=0;
        $contadorComedia=0;
        foreach($Peliculas as $pelicula){
            $contadorAccion+=$pelicula->getGenero()=='Accion' ? 1:0;
            $contadorDrama+=$pelicula->getGenero()=='Drama' ? 1:0;
            $contadorFiccion+=$pelicula->getGenero()=='Ficcion' ? 1:0;
            $contadorComedia+=$pelicula->getGenero()=='Comedia' ? 1:0;

        }
        
        ?>
        <h2>Accion: <?php echo $contadorAccion;?></h2>
        <h2>Drama: <?php echo $contadorDrama;?></h2> 
        <h2>Ficcion: <?php echo $contadorFiccion?></h2>
        <h2>Comedia: <?php echo $contadorComedia?></h2>





</body>
</html>