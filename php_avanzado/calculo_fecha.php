<?php
if($_POST){

    $dia_f = $_POST['dia'];
    $mes_f = $_POST['mes'];
    $anio_f = $_POST['anio'];

    if (($mes_f == (4||6||9||11) && $dia_f > 31) || ($mes_f == 2 && $dia_f >29)){
      echo "<h3> esa fecha no existe!!! </h3>";
    } else {

    date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fecha_add = date("$anio_f-$mes_f-$dia_f");
        $fecha_actual = date("Y-m-d");

            if($fecha_actual > $fecha_add){
              echo "<h3> La fecha ingresada es anterior al dia de hoy!!!</h3>";
            } else {
            function dias_restantes ($fecha_final){
                
              $fecha_actual = date("Y-m-d");
              $s = strtotime($fecha_final) - strtotime($fecha_actual);
              $d = intval($s/86400);
              echo "<h3> Dias restante hasta la fecha $fecha_final : $d</h3>"; }

        dias_restantes($fecha_add);
     }
    }

}
  ?>