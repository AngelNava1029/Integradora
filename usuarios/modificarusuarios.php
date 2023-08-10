<?php 
    print_r($_POST);
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryupdateUsuarios = "UPDATE usuarios SET apellido1 = '{$_POST['apellido1']}',apellido2 = '{$_POST['apellido2']}',nombres = '{$_POST['nombres']}',email = '{$_POST['email']}', contrasena = '{$_POST['contrasena']}'WHERE id = '{$_POST['id']}';";
    $conn = new mysqli("localhost","root","","pos");
    $comando = mysqli_query($conn , $sqlqueryupdateUsuarios);
    header('Location: usuarios.php');
?>  