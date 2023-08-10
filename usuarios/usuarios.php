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
    <title>usuarios</title>
    
</head>
<body background="2agencia.png">
    <center>
    <span style="font-size: 23px;"><a href="../productos/productos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">PRODUCTOS</a>
    <a href="../accesorios/accesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">ACCESORIOS</a>
    <a href="../catalogos/catalogosmotos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CATALOGOS DE MOTOS</a> 
    <a href="../catalogos/catalogosaccesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CATALOGOS DE ACCESORIOS</a> 
    <a href="../ventas/ventas.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">VENTAS</a>   
    <a href="../cerrarsesion.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CERRAR SESION</a> 
    <br></br><center><t1 style = "font-size:50px;color:#0DB5A9;">USUARIOS</t1></center></br></span>
    <center>

    <form action="insertarusuarios.php" method = "post">
    <fieldset style="width:0px; border: solid 5px #000000; background-color:#0DB5A9">
    <font face='Times New Roman' size='5'>AGREGAR NUEVO USUARIO</font><br></br>
        Apellido 1: <input name = "apellido1" type="text" tabindex='1'><br>
        Apellido 2: <input name = "apellido2" type = "text" tabindex='2'><br>
        Nombres: <input name = "nombres" type = "text" tabindex='3'><br>
        Email: <input name = "email" type = "text" tabindex='4'><br>
        Contraseña: <input name = "contrasena" type = "text" tabindex='5'><br>        
        </br><input type ="submit"style="color: black; background-color:white;font-size: 20px; font-family: Times New Roman;  border: 4px solid black; padding: 10px; margin: 5px; border-radius: 40px;" value = 'Agregar Usuario'><br></br>
    </fieldset>
    </center>
</form><br></br>

    <?php
    
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryselect = "SELECT * FROM usuarios;";
    $comando = mysqli_query($conn , $sqlqueryselect);
    if($comando->num_rows > 0){
        echo "<table border='5' bgcolor = '#ffffff'>
                <tr><th>ID</th>
                <th>APELLIDO1</th>
                <th>APELLIDO2</th>
                <th>NOMBRES</th>
                <th>EMAIL</th>
                <th>CONTRASEÑA</th>
                <th>ELIMINAR</th>
                <th>MODIFICAR</th>
            </tr>";
        while($registro = $comando->fetch_assoc()){
            echo("\n\t<tr>\n\t
                    <td><center>".$registro["id"]."</td></center>
                    <td><center>\n\t".$registro["apellido1"]."</td></center>
                    <td><center>\n\t".$registro["apellido2"]."</td></center>
                    <td><center>\n\t".$registro["nombres"]."</td></center>
                    <td><center>\n\t".$registro["email"]."</td></center>
                    <td><center>\n\t".$registro["contrasena"]."</td></center>
                    <td><center><a href ='../usuarios/eliminarusuarios.php?id={$registro['id']}'><img src = '../img/1eliminar.png'></a></td><center>
                    <td><center><a href = '../usuarios/modificarusuariosmenu.php?id={$registro['id']}'><img src = '../img/1modificar.png'></a></td><center>
                </tr>\n");
        }echo "</table>";
    }
    else{
        echo("Aun no hay registro de usuarios ");
    }
    ?>
    <center>

</body>
</html>