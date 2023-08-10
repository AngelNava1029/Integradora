<?php
    try{
    $conn = new mysqli("localhost", "root", "", "pos");
    $sql = "INSERT INTO motos(nombre,precio,numSerie) VALUES ('".$_POST['nombre']."', '".$_POST['precio']."', '".$_POST['numSerie']."');";    $conn->query($sql);
    header("Location:productos.php"); 
    } catch (Exception $e) {
        echo 'El numero de Serie esta repetida favor de ingresar otra diferente. : ',  $e->getMessage(), "\n";
    }
?>  