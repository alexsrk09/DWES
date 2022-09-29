
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php
        //  Mostrar paleta de colores. Utilizar una tabla que muestre el color y el valor hexadecimal que le
        //  corresponde. Cada celda será un enlace a una página que mostrará un fondo de pantalla con el color
        //  seleccionado. ¿Puedes hacerlo con los conocimientos que tienes?
        //@author: Alejandro Jiménez
        $colores = array(
            "red" => "#FF0000",
            "green" => "#00FF00",
            "blue" => "#0000FF",
            "yellow" => "#FFFF00",
            "cyan" => "#00FFFF",
            "magenta" => "#FF00FF",
            "black" => "#000000",
            "white" => "#FFFFFF",
            "gray" => "#808080",
            "silver" => "#C0C0C0",
            "maroon" => "#800000",
            "olive" => "#808000",
            "purple" => "#800080",
            "teal" => "#008080",
            "navy" => "#000080",
            "orange" => "#FFA500",
            "brown" => "#A52A2A",
            "pink" => "#FFC0CB",
            "lime" => "#00FF00",
            "indigo" => "#4B0082",
            "violet" => "#EE82EE",
            "gold" => "#FFD700",
            "coral" => "#FF7F50",
            "turquoise" => "#40E0D0",
            "darkblue" => "#00008B",
            "darkcyan" => "#008B8B",
            "darkgray" => "#A9A9A9",
            "darkgreen" => "#006400",
            "darkmagenta" => "#8B008B",
            "darkolivegreen" => "#556B2F",
            "darkorange" => "#FF8C00",
            "darkorchid" => "#9932CC",
            "darkred" => "#8B0000",
            "darksalmon" => "#E9967A",
            "darkviolet" => "#9400D3",
            "fuchsia" => "#FF00FF",
            "aqua" => "#00FFFF",
            "darkkhaki" => "#BDB76B",
            "deeppink" => "#FF1493",
            "deepskyblue" => "#00BFFF",
            "dimgray" => "#696969",
            "dodgerblue" => "#1E90FF",
            "firebrick" => "#B22222",
            "forestgreen" => "#228B22",
            "gainsboro" => "#DCDCDC",
            "ghostwhite" => "#F8F8FF",
            "goldenrod" => "#DAA520",
            "greenyellow" => "#ADFF2F",
            "honeydew" => "#F0FFF0",
            "hotpink" => "#FF69B4",
            "indianred" => "#CD5C5C",
            "ivory" => "#FFFFF0",
            "khaki" => "#F0E68C",
            "lavender" => "#E6E6FA",
            "lavenderblush" => "#FFF0F5",
            "lawngreen" => "#7CFC00",
            "lemonchiffon" => "#FFFACD",
            "lightblue" => "#ADD8E6",
            "lightcoral" => "#F08080",
            "lightcyan" => "#E0FFFF",
            "lightgoldenrodyellow" => "#FAFAD2",
            "lightgreen" => "#90EE90",
            "lightgrey" => "#D3D3D3",
            "lightpink" => "#FFB6C1",
            "lightsalmon" => "#FFA07A",
            "lightseagreen" => "#20B2AA",
            "lightskyblue" => "#87CEFA",
            "lightslategray" => "#778899",
            "lightsteelblue" => "#B0C4DE",
            "lightyellow" => "#FFFFE0",
            "limegreen" => "#32CD32",
            "linen" => "#FAF0E6",
            "mediumaquamarine" => "#66CDAA",
            "mediumblue" => "#0000CD",
            "mediumorchid" => "#BA55D3",
            "mediumpurple" => "#9370DB",
            "mediumseagreen" => "#3CB371",
            "mediumslateblue" => "#7B68EE",
            "mediumspringgreen" => "#00FA9A",
            "mediumturquoise" => "#48D1CC",
            "mediumvioletred" => "#C71585",
            "midnightblue" => "#191970",
            "mintcream" => "#F5FFFA",
            "mistyrose" => "#FFE4E1",
            "moccasin" => "#FFE4B5",
            "navajowhite" => "#FFDEAD",
            "oldlace" => "#FDF5E6",
            "olivedrab" => "#6B8E23",
            "orangered" => "#FF4500",
            "orchid" => "#DA70D6",
            "palegoldenrod" => "#EEE8AA",
            "palegreen" => "#98FB98",
            "paleturquoise" => "#AFEEEE",
            "palevioletred" => "#DB7093",
            "papayawhip" => "#FFEFD5",
            "peachpuff" => "#FFDAB9",
            "peru" => "#CD853F",
            "powderblue" => "#B0E0E6",
            "rosybrown" => "#BC8F8F",
            "royalblue" => "#4169E1",
            "saddlebrown" => "#8B4513",
            "salmon" => "#FA8072",
            "sandybrown" => "#F4A460",
            "seagreen" => "#2E8B57",
            "seashell" => "#FFF5EE",
            "sienna" => "#A0522D",
            "skyblue" => "#87CEEB",
            "slateblue" => "#6A5ACD",
            "slategray" => "#708090",
            "snow" => "#FFFAFA",
            "springgreen" => "#00FF7F",
            "steelblue" => "#4682B4",
            "tan" => "#D2B48C",
            "thistle" => "#D8BFD8",
            "tomato" => "#FF6347",
            "wheat" => "#F5DEB3",
            "whitesmoke" => "#F5F5F5",
            "yellowgreen" => "#9ACD32"
        );
    
        $hasta=20;
            for ($i = 1; $i <= $hasta; $i++){
                echo("<tr>");
                for ($j = 1; $j <= $hasta; $j++){
                    $color = $colores[array_rand($colores)];
                     echo ("<td style=\" background-color:".$color.";width:20px;height:20px\">".$color."</td>");
                }
                echo("</tr>");
            }
        ?>
    </table>
</body>
</html>
<?php
echo ("<br>");
echo ("<a href=\"https://github.com/alexsrk09/DWES/blob/main/unit3/bucles/bucles4.php\">github</a>");
?>
<script type="text/javascript">
    location.reload();
</script>