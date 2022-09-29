
<?php 
    $num0 = 3;$num1 = 4;$num2 = 1; //asignacion de numeros
    if($num0>=$num1 && $num0>=$num2){
        echo $num0;
        if($num1>=$num2){echo $num1;echo $num2;}
        else {echo $num2;echo $num1;}
    }
    if($num1>$num0 && $num1>=$num2){
        echo $num1;
        if($num0>=$num2){echo $num0;echo $num2;}
        else {echo $num2;echo $num0;}
    }
    if($num2>$num0 && $num2>$num1){
        echo $num2;
        if($num0>=$num1){echo $num0;echo $num1;}
        else {echo $num1;echo $num0;}
    }
echo ("<br><br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/tree/main/unit3/condiciones/ej1\">github</a>");
?>