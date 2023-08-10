<?php
session_start();
if(empty($_SESSION['usuario'])){
    header("Location:./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
</head>
<body background="./img/2agencia.png">
    <h1 style="color:white;"><center>AGENCIA RENEGANGEL</center></h><br></br>
    <a href="./productos/productos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Productos</a><br></br>
    <a href="./usuarios/usuarios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Usuarios</a><br></br>
    <a href="./accesorios/accesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Accesorios</a><br></br>
    <a href="./catalogos/catalogosmotos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Catalogos De Motos</a><br></br>
    <a href="./catalogos/catalogosaccesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Catalogos De Accesorios</a><br></br>
    <a href="./ventas/ventas.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Ventas</a><br></br>
    <a href="./cerrarsesion.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Cerrar Sesion</a><br></br>
</body>
</html>