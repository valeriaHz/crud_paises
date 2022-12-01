<?php 
    include "../conexion.php";
    $conexion = conexion();
    $pais = $_POST['pais'];
    $continente = $_POST['continente'];
    $bandera = $_POST['url'];
    $sql = "INSERT INTO paises (pais,continente,bandera) VALUES ('$pais', '$continente', '$bandera')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta){
        header('location:../index.php');
    }else{
        echo "No se puede insertar";
    }

?>