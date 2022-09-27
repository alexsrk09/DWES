<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <a href="https://github.com/alexsrk09/DWES">github</a>
    </body>
    </html>
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
?>