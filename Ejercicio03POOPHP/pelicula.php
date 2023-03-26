<?php
class Pelicula{
    private $Titulo;
    private $anio;
    private $genero;
    public $cantidadA=1;
    public $cantidadD=1;
  

    public function __construct($Titulo, $anio,$genero,){
        $this->Titulo = $Titulo;
        $this->anio = $anio;
        $this->genero = $genero;
      
        
    }
    
    public function getTitulo()
    {
        return $this->Titulo;
    }

  
    public function setTitulo($Titulo): self
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    
    public function getAnio()
    {
        return $this->anio;
    }

    public function setAnio($anio): self
    {
        $this->anio = $anio;

        return $this;
    }

   
    public function getGenero()
    {
        return $this->genero;
    }

   
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

  
    
}

    

?>