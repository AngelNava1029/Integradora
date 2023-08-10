<?php
    $id = $_GET["id"]; 
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryeliminar = "DELETE FROM ventas WHERE id = '$id';";
    $comando = mysqli_query($conn , $sqlqueryeliminar);
    header('Location: ventas.php');
?>