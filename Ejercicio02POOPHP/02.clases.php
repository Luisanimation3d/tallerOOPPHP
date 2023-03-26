<?php 
    class Electrodomesticos {

        private $referencia;
        private $cantidadStock;
        private $precio;
       

        function __construct($referencia,$cantidadStock,$precio){
            $this->referencia = $referencia;
            $this->cantidadStock = $cantidadStock;
            $this->precio = $precio;
        
        }

        public function getReferencia()
        {
                return $this->referencia;
        }

        public function setReferencia($referencia): self
        {
                $this->referencia = $referencia;

                return $this;
        }

        public function getCantidadStock()
        {
                return $this->cantidadStock;
        }

        public function setCantidadStock($cantidadStock): self
        {
                $this->cantidadStock = $cantidadStock;

                return $this;
        }

        public function getPrecio()
        {
                return $this->precio;
        }

        public function setPrecio($precio): self
        {
                $this->precio=$precio;
                return $this;
        }

        
    }
    

    class TvSmart extends Electrodomesticos {

        private $consumoEnergia;
        private $tamano;

        public function __construct($referencia,$cantidadStock,$precio,$consumoEnergia,$tamano ){
            parent ::__construct($referencia,$cantidadStock,$precio);           
            $this->consumoEnergia = $consumoEnergia;
            $this->tamano = $tamano;
        }


        public function getConsumoEnergia()
        {
                return $this->consumoEnergia;
        }

        public function setConsumoEnergia($consumoEnergia): self
        {
                $this->consumoEnergia = $consumoEnergia;

                return $this;
        }

        public function getTamano()
        {
                return $this->tamano;
        }

        public function setTamano($tamano): self
        {
                $this->tamano = $tamano;
                return $this;
        }

        
}

    class SonidoDigital extends Electrodomesticos {
        
        private $peso;

        public function __construct($referencia,$cantidadStock,$precio,$peso){
            parent ::__construct($referencia,$cantidadStock,$precio);            
            $this->peso = $peso;
        }

       
        public function getPeso()
        {
                return $this->peso;
        }

        public function setPeso($peso): self
        {
                $this->peso = $peso;

                return $this;
        }
    }


?>