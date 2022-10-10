
<?php 
/**
 * gestión de formularios
 * @author Alex09
 */
    $datos = array(
        "nombre"=>array(
            "name"=>"nombre",
            "type"=>"text",
            "value"=>""
        ),
        "ap1"=>array(
            "name"=>"apellido1",
            "type"=>"text",
            "value"=>""
        ),
        "ap2"=>array(
            "name"=>"apellido2",
            "type"=>"text",
            "value"=>""
        ),
        "edad"=>array(
            "name"=>"edad",
            "type"=>"number",
            "value"=>""
        )
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesa_formulario1.php" method="post">
        <?php 
            foreach ($datos as $dato){
                echo ("<input type=\"".$dato["type"]."\" name=\"".$dato["name"]."\" value=\"".$dato["value"]."\" />");
            }
        ?>
        <input type="submit" name="send" value="send"/>
    </form>
</body>
</html>