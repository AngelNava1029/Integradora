<?php
session_start();
if(empty($_SESSION['usuario'])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body background="2agencia.png">
    <center>
    <span style="font-size: 20px;"><a href="../productos/productos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">PRODUCTOS</a>
    <a href="../usuarios/usuarios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">USUARIOS</a>
    <a href="../accesorios/accesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">ACCESORIOS</a>
    <a href="../catalogos/catalogosmotos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CATALOGOS DE MOTOS</a>
    <a href="../catalogos/catalogosaccesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CATALOGOS DE ACCESORIOS</a>
    <a href="../ventas/ventas.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">VENTAS</a>   
    <a href="../cerrarsesion.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CERRAS SESION</a>
    <br></br><center><t1 style = "font-size:50px;color:#0DB5A9;">MODIFICAR DATOS DE USUARIO</t1><br><br></br></center>
    <center>
    <?php
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryselect = "SELECT * FROM usuarios;";
    $comando = mysqli_query($conn , $sqlqueryselect);
    if($comando->num_rows > 0){
        
        while ($registro = $comando->fetch_assoc())
        {
            
            $id = $registro['id'];
            $apellido1 = $registro['apellido1'];
            $apellido2 = $registro['apellido2'];
            $nombres = $registro['nombres'];
            $email = $registro['email'];
            $contrasena = $registro['contrasena'];
            
        }
        
    }
    else{
        echo("Aun no hay registro de usuarios");
    }
    ?>
    <center>
<form action="modificarusuarios.php" method = "post">
<fieldset style="width:0px; border: solid 5px #000000; background-color:#0DB5A9">
    <font face='Times New Roman' size='5'>MODIFICAR TUS NUEVOS DATOS</font><br></br>
        id: <br><input name = "id" type="text" value = "<?php echo $id;?>"readonly><br>
        Apellido 1: <input name = "apellido1" type="text" value = "<?php echo $apellido1;?>"><br>
        Apellido 2: <input name = "apellido2" type = "text" value = "<?php echo $apellido2;?>"><br>
        Nombres: <input name = "nombres" type = "text" value = "<?php echo $nombres;?>"><br>
        Email: <br><input name = "email" type = "text" value = "<?php echo $email;?>"><br>
        Contraseña: <input name = "contrasena" type = "text" value = "<?php echo $contrasena;?>"><br>
        
        </br><input type ="submit" style="color: black; background-color:white;font-size: 20px; font-family: Times New Roman;  border: 4px solid black; padding: 10px; margin: 5px; border-radius: 40px;"value = 'Actualizar Datos Usuario'>
    </fieldset>
    </center>
</form>
</body>
</html>