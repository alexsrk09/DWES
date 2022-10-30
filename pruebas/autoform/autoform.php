<?php
    /** Autoform
     * @author AlexSRK09
     * @var array $autoform Array con los campos del formulario
     * campos obligatorios: type, label, name, id
     * campos opcionales: required, minlength, maxlength, min, max, placeholder, value
     */
    //ejemplo de autoformulario
    /*$autoform = array(
        array(
            "name" => "nombre",
            "type" => "text",
            "label" => "Nombre",
            "required" => true,
            "minlength" => 3,
            "maxlength" => 20,
            "placeholder" => "Introduce tu nombre",
            "value"=>  "pepe",
            "id" => "nombre",
        ),
    );*/
?>
<!-- link boostrap 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
    function autoform($autoform){
        echo "<div class=\"form-group\">";
        foreach($autoform as $campo){
            echo "<label for='".$campo["type"]."'>".$campo["label"].": </label>";
            echo "<input class=\"form-control\" type='".$campo["type"]."' name='".$campo["name"]."' id='".$campo["id"]."'";
            if($campo["required"]){
                echo " required";
            }
            if(isset($campo["minlength"])){
                echo " minlength='".$campo["minlength"]."'";
            }
            if(isset($campo["maxlength"])){
                echo " maxlength='".$campo["maxlength"]."'";
            }
            if(isset($campo["min"])){
                echo " min='".$campo["min"]."'";
            }
            if(isset($campo["max"])){
                echo " max='".$campo["max"]."'";
            }
            if(isset($campo["placeholder"])){
                echo " placeholder='".$campo["placeholder"]."'";
            }
            if(isset($campo["value"])){
                echo " value='".$campo["value"]."'";
            }
            echo ">";
            echo "<br>";
        }
        echo "</div>";
        echo "  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        ";
    }
?>