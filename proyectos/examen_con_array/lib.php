<?php
/** directorio de lib
 * @author: Alejandro JIménez
 */
include "configs.php";
    $reservados = array();
    $array=aleatorios($abonos);
    foreach ($array as $asiento) {
        if($asiento>1 && $asiento<100){
            $letra = "A";
        }
        if($asiento>101 && $asiento<200){
            $letra = "B";
        }
        if($asiento>201 && $asiento<300){
            $letra = "C";
        }
        if($asiento>301 && $asiento<400){
            $letra = "D";
        }
        array_push($reservados, array(
            "asiento" => $asiento,
            "letra" => $letra,
        ));
    }
    function aleatorios($numero){
        $array = array();
        for($i=0; $i<$numero; $i++){
            $aleatorio = rand(1, 400);
            if(in_array($aleatorio, $array)){
                $i--;
            }else{
                array_push($array, $aleatorio);
            }
        }
        return $array;
    }
?>