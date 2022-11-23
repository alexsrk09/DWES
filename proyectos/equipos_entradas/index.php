<?php 
include_once 'configs/configs.php';
//traerse todos los equipos de la bbdd
try {
    $consulta = $conexion->prepare("SELECT * FROM equipos");
    $consulta->execute();
    $equipos = $consulta->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
echo "<h1>Equipos</h1>";
echo "<table><form method='post' action='controllers/main_controller.php'>";
if (isset($equipos)) {
    echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Nombre</td>";
        echo "</tr>";
    foreach ($equipos as $equipo) {
        echo "<tr>";
        echo "<td>".$equipo['ID']."</td>";
        echo "<td>".$equipo['Nombre']."</td>";
        echo "<td><button type='submit' name='borrar' value='".$equipo['ID']."'>Borrar</button></td>";
        echo "<td><input type='text' name='nombre-".$equipo['ID']."' placeholder='Nuevo nombre'></td>";
        echo "<td><button type='submit' name='editar' value='".$equipo['ID']."'>Editar</button></td>";
        echo "</tr>";
    }
}
echo "</table>
<input type='text' name='nombre' placeholder='Nombre del equipo'>
<input type='submit' name='nuevo' value='Nuevo'>
</form>";
?>
<br>
<a href="baloncesto_pokemons.sql">Descargar BBDD</a>