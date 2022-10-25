<?php 
/**
 * Muestra las cookies
 * @author AlexSRK09
 */
if (!($_COOKIE)) {
    echo "No hay cookies";
} else {
    foreach ($_COOKIE as $key => $value) {
        if (is_array(unserialize($value))) {
            echo "$key: ";
            foreach (unserialize($value) as $key2 => $value2) {
                echo "$key2: $value2 ";
            }
            echo "<br>";
        } else {
            echo "$key: $value <br>";
        }
    }
}
?>