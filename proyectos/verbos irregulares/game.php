<?php
/**Proyecto verbos irregulares 
 * @author: AlexJL
*/
if(!($_POST))throw new Exception("No POST data"); //si no hay datos POST, lanzar excepción
include 'irregular_verbs.php'; //incluye el array de verbos irregulares
$numeroVerbos =$_POST['numeroVervos']; //guarda el número de verbos en una variable
if ($numeroVerbos > count($irregularVerbs)) {
    $numeroVerbos = count($irregularVerbs);
}// comprueba que el número de verbos no sea mayor que el número de verbos en el array
$verbosAleatorios= $irregularVerbs; //array de verbos aleatorios
(shuffle($verbosAleatorios)); //mezcla el array de verbos irregulares
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    $contador =0; //contador de verbos
    foreach ($verbosAleatorios as $verb) {
        if ($contador < $numeroVerbos) {
            echo $verb[0] . " " . $verb[1] . " " . $verb[2] . " " . $verb[3] . "<br>";
            $contador++;
        }
        else break;
    }
    ?>
<body>
</body>

</html>