<?php
/** directorio de config
 * @author: Alejandro JIménez
 */

$abonos = 10;
$tarifas = array(
    array('equipo'=>'Picapiedras', 'tarifas'=>array(
                                                array('zona'=>'A','precio'=>20),
                                                array('zona'=>'B','precio'=>15),
                                                array('zona'=>'C','precio'=>10),
                                                array('zona'=>'D','precio'=>5))),
    array('equipo'=>'Roedores', 'tarifas'=>array(
                                                array('zona'=>'A','precio'=>21),
                                                array('zona'=>'B','precio'=>16), 
                                                array('zona'=>'C','precio'=>16),
                                                array('zona'=>'D','precio'=>57))),
    array('equipo'=>'Perezosos', 'tarifas'=>array(
                                                array('zona'=>'A','precio'=>24),
                                                array('zona'=>'B','precio'=>12),
                                                array('zona'=>'C','precio'=>5),
                                                array('zona'=>'D','precio'=>6))),
    array('equipo'=>'Invisibles', 'tarifas'=>array(
                                                array('zona'=>'A','precio'=>20),
                                                array('zona'=>'B','precio'=>15),
                                                array('zona'=>'C','precio'=>10),
                                                array('zona'=>'D','precio'=>5))),
    array('equipo'=>'Legendarios', 'tarifas'=>array( 
                                                array('zona'=>'A','precio'=>20),
                                                array('zona'=>'B','precio'=>15),
                                                array('zona'=>'C','precio'=>10),
                                                array('zona'=>'D','precio'=>5))),
    array('equipo'=>'Magos', 'tarifas'=>array( 
                                                array('zona'=>'A','precio'=>20),
                                                array('zona'=>'B','precio'=>15),
                                                array('zona'=>'C','precio'=>27),
                                                array('zona'=>'D','precio'=>5))),
    array('equipo'=>'Sultanes', 'tarifas'=>array(
                                                array('zona'=>'A','precio'=>20),
                                                array('zona'=>'B','precio'=>15),
                                                array('zona'=>'C','precio'=>10),
                                                array('zona'=>'D','precio'=>5))));
$precios = array( // array de precios
    "picapiedras" => array(//equipo visitante
        "A" => 20,//precio de la entrada A
        "B" => 30,
        "C" => 40,
        "D" => 50,
    ),
    "roedores" => array(
        "A" => 60,
        "B" => 70,
        "C" => 80,
        "D" => 90,
    ),
    "perezosos" => array(
        "A" => 6,
        "B" => 7,
        "C" => 8,
        "D" => 9,
    ),
    "invisibles" => array(
        "A" => 1,
        "B" => 2,
        "C" => 3,
        "D" => 4,
    ),
    "legendarios" => array(
        "A" => 3,
        "B" => 4,
        "C" => 5,
        "D" => 6,
    ),
    "magos" => array(
        "A" => 31,
        "B" => 41,
        "C" => 51,
        "D" => 61,
    ),
    "sultanes" => array(
        "A" => 32,
        "B" => 42,
        "C" => 52,
        "D" => 62,
    ),
);
?>