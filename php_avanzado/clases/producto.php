<?php 
    class Producto {
    private $bd;
    function __construct($base){
        $this->bd = $base;
    }

    public function InsenterProducto($producto,$codigo,$descripcion,$precio){
        $respuesta = $this->bd->ejecutarConsultas("INSERT INTO productos VALUES ('$codigo','$producto','$descripcion','$precio')");
        return $respuesta;
    }

    public function  Listar_Productos(){
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM productos ORDER BY codigo");
        return $respuesta;
    }

    public function seleccionarProducto($codigo){
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM productos WHERE codigo = $codigo");
        return $respuesta;
    }


}
?>