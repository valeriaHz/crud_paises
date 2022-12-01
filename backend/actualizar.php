<?php 
    include "../conexion.php";
    $conexion = conexion();
    $id = $_POST ['id'];
    $pais = $_POST['pais'];
    $continente = $_POST['continente'];
    $bandera = $_POST['url'];
    $sql = "UPDATE paises SET pais = '$pais', continente = '$continente', bandera = '$bandera'
            WHERE id = '$id'";
    $respuesta = mysqli_query($conexion, $sql);

    if($respuesta){
        header('location:../index.php');
    }else{
        echo "No se pudo actualizar";
    }
?>