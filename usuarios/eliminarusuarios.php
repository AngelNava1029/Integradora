<?php
    $id = $_GET["id"]; 
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryeliminar = "DELETE FROM usuarios WHERE id = '$id';";
    $comando = mysqli_query($conn , $sqlqueryeliminar);
    header('Location: usuarios.php');
?>