<?php 
    require "02.clases.php";

    $tvs = array(
        new TvSmart ("smart01",12,500000,"medio","55 pulgadas"),
        new TvSmart ("smart02",5,500000,"bajo","45 pulgadas"),
    );

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['crear'])) {
            $referencia = $_POST['referencia'];
            $cantidadStock = $_POST['cantidadStock'];
            $precio = $_POST['precio'];
            $consumoEnergia = $_POST['consumoEnergia'];
            $tamano = $_POST['tamano'];

            $tv = new TvSmart($referencia,$cantidadStock,$precio,$consumoEnergia,$tamano);
            $tvs[] = $tv;
        }

        if (isset($_POST['actualizar'])) {
            $id = $_POST['id'];
            $referencia = $_POST['referencia'];
            $cantidadStock = $_POST['cantidadStock'];
            $precio = $_POST['precio'];
            $consumoEnergia = $_POST['consumoEnergia'];
            $tamano = $_POST['tamano'];

            $tv = $tvs[$id];
            $tv->setReferencia($referencia);
            $tv->setCantidadStock($cantidadStock);
            $tv->setPrecio($precio);
            $tv->setConsumoEnergia($consumoEnergia);
            $tv->setTamano($tamano);

            $tvs[$id] = $tv;
        }

        if (isset($_POST['eliminar'])) {
            $id = $_POST['id'];
            array_splice($tvs,$id,1);
        }

        if (isset($_POST['confirmar'])) {
            $id = intval($_POST['id']);
            $cantidad = $_POST['cantidad'];
            $cantidadStock = $_POST['cantidadStock'];
            $total = 0;
            $mensaje = "";
            
            $tv = $tvs[$id];
            
            if ($cantidadStock > $cantidad){
                $total = $cantidadStock - $cantidad;
            
            $tv->setCantidadStock($total);
            $tvs[$id] = $tv;
            
            
            }else{
                $mensaje = 'La cantidad ingresada supera el stock';
                echo "<script> alert('$mensaje'); </script>";
                
            }
        }
    }
        

?>