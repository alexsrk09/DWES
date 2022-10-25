<?php
/**Proyecto verbos irregulares 
 * @author: AlexJL
 */
if (!($_POST))throw new Exception("No POST data"); //si no hay datos POST, lanzar excepción
include 'irregular_verbs.php'; //incluye el array de verbos irregulares
if ($_POST['numeroVervos']) {
    $numeroVerbos = $_POST['numeroVervos']; //guarda el número de verbos en una variable
    if ($numeroVerbos > count($irregularVerbs)) {
        $numeroVerbos = count($irregularVerbs);
    } // comprueba que el número de verbos no sea mayor que el número de verbos en el array
    $verbosAleatorios = $irregularVerbs; //array de verbos aleatorios
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
<form method="post" action="process_cookie.php">
<table>
<?php
    echo "<tr><th>Infinitivo</th><th>Participio</th><th>Gerundio</th><th>Traducción</th></tr>";
    $contador = 0; //contador de verbos
    if(!isset($_COOKIE['arrayCookie']))foreach ($verbosAleatorios as $verb) {
        $contadorposiciones=0; //contador de posiciones vel vector de post
        $contadorCasillas = 0; //contador de casillas
        if ($contador < $numeroVerbos) {
            echo "<tr>";
            foreach($verb as $key => $value) {
                if ($contadorCasillas < $_POST['numeroCasillas'] && random_int(0, 1.5) == 1) {
                    echo "<td><input type='text' name='$value.$contadorposiciones'></td>";
                    $contadorCasillas++;
                }
                else {
                    echo "<input type='hidden' name='$value.$contadorposiciones' value='$value'>";
                    echo "<td>$value</td>";
                }
                $contadorposiciones++;
            }
            echo "</tr>";
            $contador++;
        } else{
            echo "<input type='hidden' name='numeroVervos' value='".$_POST['numeroVervos']."'>";
            echo "<input type='hidden' name='numeroCasillas' value='".$_POST['numeroCasillas']."'>";            
            break;
        }
    }
    else {
        echo "<tr>";
        foreach (unserialize($_COOKIE['arrayCookie']) as $key => $value) {
            
            $separado = explode('_', $key);//separar $key por la barra baja
            if ($separado[0]!=$value) {
                echo "<td><input type='text' name='$key'></td>";
            }
            else {
                echo "<input type='hidden' name='$key' value='$value'>";
                echo "<td>$value</td>";
            }
            if($separado[1]==3)echo "</tr><tr>";//si el segundo elemento es 3, se cierra la fila y se abre otra
        }
        echo "<input type='hidden' name='numeroVervos' value='".$_POST['numeroVervos']."'>";
        echo "<input type='hidden' name='numeroCasillas' value='".$_POST['numeroCasillas']."'>";   
    }
}
?>
</table>
<input type="submit" value="Enviar">
</form>

<body>
</body>

</html>