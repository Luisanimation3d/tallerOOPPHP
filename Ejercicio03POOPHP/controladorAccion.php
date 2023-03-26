<?php
include('pelicula.php');

$Peliculas=array(
    new pelicula("Atrapame",2018,"Accion",""),
    new pelicula("si",2023,"Comedia",""),
    new pelicula("puedes",2019,"Ficcion",""),
    new pelicula("gay",2034,"Drama",""),

);


if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['crear'])){
        $Titulo=$_POST['Titulo'];
        $anio=$_POST['anio'];
        $genero=$_POST['genero'];

        $pelicula=new pelicula($Titulo,$anio,$genero);
        $Peliculas[]=$pelicula;

    }

    if (isset($_POST['actualizar'])){
        $id=isset($_POST['id']);
        $Titulo=$_POST['Titulo'];
        $anio=$_POST['anio'];
        $genero=$_POST['genero'];

        $pelicula=($Peliculas[$id]);
        $pelicula->setTitulo($Titulo);
        $pelicula->setAnio($anio);
        $pelicula->setGenero($genero);

        $Peliculas[$id]=$pelicula;

    }
    if (isset($_POST['eliminar'])){
        $id=intval($_POST['id']);
        array_splice($Peliculas,$id,1);
    }
}
?>