<?php
include '../configs/configs.php';
if(isset($_POST['borrar'])){
    $id = $_POST['borrar'];
    try {
        $consulta = $conexion->prepare("DELETE FROM equipos WHERE ID = :id");
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        header('Location: ../index.php');
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
}
if(isset($_POST['nuevo'])){
    $nombre = $_POST['nombre'];
    try {
        $consulta = $conexion->prepare("INSERT INTO equipos (Nombre) VALUES (:nombre)");
        $consulta->bindParam(':nombre', $nombre);
        $consulta->execute();
        header('Location: ../index.php');
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
}
if(isset($_POST['editar'])){
    $id = $_POST['editar'];
    $nombre = $_POST['nombre-'.$id];
    if ($nombre != "") {
        try {
            $consulta = $conexion->prepare("UPDATE equipos SET Nombre = :nombre WHERE ID = :id");
            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':id', $id);
            $consulta->execute();
            header('Location: ../index.php');
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
    }
}
?>