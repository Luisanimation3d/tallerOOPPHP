<?php
    require "02.clases.php";

    $sonidos = array (
        new SonidoDigital("SonicXM21",55,200000,"4 kg"),
        new SonidoDigital("LGXS212",20,300000,"2 kg"),
        new SonidoDigital("PanasonicXX00",12,500000,"5 kg"),
    );

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['crear'])) {
            $referencia = $_POST['referencia'];
            $cantidadStock = $_POST['cantidadStock'];
            $precio = $_POST['precio'];
            $peso = $_POST['peso'];

            $sonido = new SonidoDigital ($referencia,$cantidadStock,$precio,$peso);
            $sonidos[] = $sonido;
        }

        if (isset($_POST['actualizar'])) {
            $id = $_POST['id'];
            $referencia = $_POST['referencia'];
            $cantidadStock = $_POST['cantidadStock'];
            $precio = $_POST['precio'];
            $peso = $_POST['peso'];

            $sonido = $sonidos[$id];
            $sonido->setReferencia($referencia);
            $sonido->setCantidadStock($cantidadStock);
            $sonido->setPrecio($precio);
            $sonido->setPeso($peso);

            $sonidos[$id] = $sonido;
        }

        if (isset($_POST['eliminar'])) {
            $id = $_POST['id'];
            array_splice($sonidos,$id,1);
        }

        if (isset($_POST['confirmar'])) {
            $id = intval($_POST['id']);
            $cantidad = $_POST['cantidad'];
            $cantidadStock = $_POST['cantidadStock'];
            $total = 0;

            $sonido = $sonidos[$id];

            if ($cantidadStock > $cantidad){
                $total = intval($cantidadStock) - intval($cantidad);
            
            $sonido->setCantidadStock($total);
            $sonidos[$id] = $sonido;
            
            
            }else{
                $mensaje = 'La cantidad ingresada supera el stock';
                echo "<script> alert('$mensaje'); </script>";
            }
        }
    }

?>