<?php
    $id_ac = $_GET["id"]; 
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryeliminar = "DELETE FROM accesorios WHERE id_ac = '$id_ac';";
    $comando = mysqli_query($conn , $sqlqueryeliminar);
    header('Location: accesorios.php');
?>