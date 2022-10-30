<?php
paintMap("a");
function paintMap($position)
{
    include "map.php";
    echo "<table>";
    foreach ($map as $level) {
        echo "<tr>";
        foreach ($level as $zone) {
            echo "<td>";
            if ($zone["puertas"]["W"])
                echo "--------------&nbsp;&nbsp;&nbsp;--------------- <br/>";
            else
                echo "-------------------------------- <br/>";
            if ($zone["puertas"]["S"]) {
                if ($zone["puertas"]["N"])
                    echo "|".spaces()."|<br/>|".spaces()."|<br/>&nbsp;".spaces()."&nbsp;<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
                else
                echo "|".spaces()."|<br/>|".spaces()."|<br/>&nbsp;".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
            } else{
                if ($zone["puertas"]["N"])
                    echo "|".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."&nbsp;<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
                else
                echo "|".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>|".spaces()."|<br/>";
            }
            if ($zone["puertas"]["E"])
                echo "--------------&nbsp;&nbsp;&nbsp;--------------- <br/>";
            else
                echo "-------------------------------- <br/>";
               
            echo "</td>";

        }
        echo "</tr>";
    }
    echo "</table>";
}
function spaces(){
    return "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}
?>