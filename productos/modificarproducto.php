<?php 

    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryupdate = "UPDATE motos SET nombre = '{$_POST['nombre']}',precio = '{$_POST['precio']}' WHERE numSerie = '{$_POST['numSerie']}'";
    $comando = mysqli_query($conn , $sqlqueryupdate);
    header('Location: productos.php');

?>  