<?php 
    class Compra {
    private $bd;
    function __construct($base){
        $this->bd = $base;
    }

    public function InsenterCompra($producto,$codigo,$precio,$descripcion){
        $respuesta = $this->bd->ejecutarConsultas("INSERT INTO compras VALUES ( DEFAULT,'$codigo','$producto','$descripcion','$precio')");
        return $respuesta;
    }

    public function listarCompras(){
        $respuesta = $this->bd->ejecutarConsultas("SELECT * FROM compras ORDER BY id_compra");
        return $respuesta;
    }

    public function eliminarCompra($id_compra){
        $respuesta = $this->bd->ejecutarConsultas("DELETE FROM compras WHERE id_compra=$id_compra");
        return $respuesta;
    }
}
?>