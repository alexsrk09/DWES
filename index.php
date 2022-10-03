<?php 
    $ficheros = array(
        "unit0"=>array(
            "ej1"=>array(
                "titulo"=>"Ejercicio 1",
                "descripcion"=>"Ejercicio 1 de la unidad 0 en pdf",
                "enlace"=>"unit 0/Alejandro Jiménez Leyva.pdf",
                "tags"=>"unidad0, pdf, ejercicio1"
            )
        ),
        "unit1"=>array(
            "ej1"=>array(
                "titulo"=>"Ejercicio 1",
                "descripcion"=>"Ejercicio 1 de la unidad 1",
                "enlace"=>"unit1/tarea 1/index.php",
                "tags"=>"unidad1, ejercicio1",
            )
        ),
        "unit2"=>array(
            "ej1"=>array(
                "titulo"=>"Ejercicio 1",
                "descripcion"=>"Ejercicio 1 de la unidad 2",
                "enlace"=>"unit2/ej1/index.php",
                "tags"=>"unidad2, ejercicio1",
            ),
            "ej2"=>array(
                "titulo"=>"Ejercicio 2",
                "descripcion"=>"Ejercicio 2 de la unidad 2",
                "enlace"=>"unit2/ej2/index.php",
                "tags"=>"unidad2, ejercicio2",
            ),
            "ej3"=>array(
                "titulo"=>"Ejercicio 3",
                "descripcion"=>"Ejercicio 3 de la unidad 2",
                "enlace"=>"unit2/ej3/index.php",
                "tags"=>"unidad2, ejercicio3",
            ),
        ),
        "unit3"=>array(
            "ej1"=>array(
                "titulo"=>"Ejercicio 1 condiciones",
                "descripcion"=>"Ejercicio 1 de la unidad 3 condiciones",
                "enlace"=>"unit3/condiciones/ej1/index.php",
                "tags"=>"unidad3, condiciones, ejercicio1",
            ),
            "ej2"=>array(
                "titulo"=>"Ejercicio 2 condiciones",
                "descripcion"=>"Ejercicio 2 de la unidad 3 condiciones",
                "enlace"=>"unit3/condiciones/ej2/index.php",
                "tags"=>"unidad3, condiciones, ejercicio2",
            ),
            "ej3"=>array(
                "titulo"=>"Ejercicio 3 condiciones",
                "descripcion"=>"Ejercicio 3 de la unidad 3 condiciones",
                "enlace"=>"unit3/condiciones/ej3/index.php",
                "tags"=>"unidad3, condiciones, ejercicio3",
            ),
            "ej4"=>array(
                "titulo"=>"Ejercicio 4 condiciones",
                "descripcion"=>"Ejercicio 4 de la unidad 3 condiciones",
                "enlace"=>"unit3/condiciones/ej4/index.php",
                "tags"=>"unidad3, condiciones, ejercicio4",
            ),
            "ej5"=>array(
                "titulo"=>"Ejercicio 5 condiciones",
                "descripcion"=>"Ejercicio 5 de la unidad 3 condiciones",
                "enlace"=>"unit3/condiciones/ej5/index.php",
                "tags"=>"unidad3, condiciones, ejercicio5",
            ),

            "ej6"=>array(
                "titulo"=>"Ejercicio 1 bucles",
                "descripcion"=>"Ejercicio 1 de la unidad 3 bucles",
                "enlace"=>"unit3\bucles\bucles1.php",
                "tags"=>"unidad3, bucles, ejercicio1",
            ),
            "ej7"=>array(
                "titulo"=>"Ejercicio 2 bucles",
                "descripcion"=>"Ejercicio 2 de la unidad 3 bucles",
                "enlace"=>"unit3\bucles\bucles2.php",
                "tags"=>"unidad3, bucles, ejercicio2",
            ),
            "ej8"=>array(
                "titulo"=>"Ejercicio 3 bucles",
                "descripcion"=>"Ejercicio 3 de la unidad 3 bucles",
                "enlace"=>"unit3\bucles\bucles3.php",
                "tags"=>"unidad3, bucles, ejercicio3",
            ),
            "ej9"=>array(
                "titulo"=>"Ejercicio 4 bucles",
                "descripcion"=>"Ejercicio 4 de la unidad 3 bucles",
                "enlace"=>"unit3\bucles\bucles4.php",
                "tags"=>"unidad3, bucles, ejercicio4",
            ),
            "ej10"=>array(
                "titulo"=>"Ejercicio 5 bucles",
                "descripcion"=>"Ejercicio 5 de la unidad 3 bucles",
                "enlace"=>"unit3\bucles\bucles5.php",
                "tags"=>"unidad3, bucles, ejercicio5",
            ),
            "ej11"=>array(
                "titulo"=>"Ejercicio 5 arrays",
                "descripcion"=>"Ejercicio 1 de la unidad 3 arrays",
                "enlace"=>"unit3\arrays\arrays1.php",
                "tags"=>"unidad3, arrays, ejercicio1",
            ),
        ),
    );
    foreach($ficheros as $unidad=>$ejercicios){
        echo "<h1>$unidad</h1>";
        foreach($ejercicios as $ejercicio=>$datos){
            echo "<h5>$datos[titulo]</h5>";
            echo "<p>$datos[descripcion]</p>";
            echo "<a href='$datos[enlace]' target=\"_blank\">Enlace</a>";
        }
    }
?>