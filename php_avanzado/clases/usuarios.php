<?php

class Usuario{
    private $nombre;
    private $apellido;
    private $fecha_nac;

    function __construct($nom,$ape,$f_n){
            $this->nombre = $nom;
            $this->apellido= $ape;
            $this->fecha_nac=$f_n;
    }

    private function calcular_edad(){

        date_default_timezone_set("America/Argentina/Buenos_Aires");

        $hoy = date("Y-m-d");
        $resta = strtotime($hoy) - strtotime($this->fecha_nac);
        $cant_anio = intval($resta/31536000);
        return $cant_anio;
    }

    public function imprime_caracteristicas(){
        echo "<p><strong>Nombre:</strong> ".$this->nombre.".</p>";
		echo "<p><strong>Apellido:</strong> ".$this->apellido.".</p>";
		echo "<p><strong>Fecha de nacimiento:</strong> ".$this->fecha_nac.".</p>";
        $anio_user = $this-> calcular_edad();
        echo "<p><strong>Edad: </strong>".$anio_user." años.</p>";
    }
}
?>