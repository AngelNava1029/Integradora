<?php
    $numSerie = $_GET["numSerie"]; 
    $conn = new mysqli("localhost", "root", "", "pos");
    $sqlqueryeliminar = "DELETE FROM motos WHERE numSerie = '$numSerie';";
    $comando = mysqli_query($conn , $sqlqueryeliminar);
    header("Location:productos.php");
?>