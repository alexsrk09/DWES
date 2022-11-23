<?php 
//conexion con la BBDD via PDO
try {$conexion = new PDO('mysql:host=localhost;dbname=baloncesto_pokemons;charset=utf8', 'baloncesto', 'baloncesto');} 
catch (PDOException $e) {echo 'Falló la conexión: ' . $e->getMessage();}
?>