<?php 
    try{
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryselectusuarios = "INSERT INTO usuarios(apellido1,apellido2,nombres,email,contrasena) VALUE('".$_POST['apellido1']."'".','."'".$_POST['apellido2']."'".','."'".$_POST['nombres']."'".','."'".$_POST['email']."'".','."'".$_POST['contrasena']."');";
    echo $sqlqueryselectusuarios;
    $comando = mysqli_query($conn , $sqlqueryselectusuarios);
    header('Location: usuarios.php');
    }catch (Exception $e) {
        echo 'El id del Usuario esta repetida favor de ingresar otro diferente: ',  $e->getMessage(), "\n";
    }
?>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=a">
    <title>Usuarios</title>
</head>
<body>
    <a href = "usuarios.php"> Usuarios</a>
</body>
</html>