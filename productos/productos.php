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
    <title>Motos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body background="2agencia.png"> 
    <center>
    <span style="font-size: 24px;">
    <a href="../usuarios/usuarios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">USUARIOS</a>
    <a href="../accesorios/accesorios.php" style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">ACCESORIOS</a>
    <a href="../catalogos/catalogosmotos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CATALOGOS DE MOTOS</a> 
    <a href="../catalogos/catalogosaccesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CATALOGOS DE ACCESORIOS</a>
    <a href="../ventas/ventas.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">VENTAS</a>   
    <a href="../cerrarsesion.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">CERRAR SESION</a><br></br></span>
    <center><t1 style = "font-size:50px;color:#0DB5A9;">MOTOS</t1></center><br></br>
    <center>
       
    <form action="insertarproducto.php" method = "post">
    <fieldset style="width:0px; border: solid 5px #000000; background-color:#0DB5A9;">
    <font face='Times New Roman' size='5'>AGREGAR NUEVA MOTO</font><br></br> 
    
        Nombre: <input name = "nombre" type="text" value = ""><br>
        Precio: <input name = "precio" type="text" value = ""><br>
        Numero De Serie: <input name = "numSerie" type = "text" value = ""><br>
        <br><input type ="submit"style="color: black; background-color:white;font-size: 20px; font-family: Times New Roman;  border: 4px solid black; padding: 10px; margin: 5px; border-radius: 40px;" value = 'Agregar Moto'><br></br>
    </fieldset>
    </center>
    </form><br></br>

    <?php
    
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryselect = "SELECT * FROM motos;";
    $comando = mysqli_query($conn , $sqlqueryselect);
    if($comando->num_rows > 0){
        echo "<table border='5' bgcolor = '#ffffff'>
            <tr>
                <tr><th>NOMBRE</th>
                <th>PRECIO</th>
                <th>NUMERO DE SERIE</th>
                <th>ELIMINAR</th>
                <th>MODIFICAR</th>
            </tr>";
        while($registro = $comando->fetch_assoc()){
            echo("\n\t<tr>\n\t
                    <td><center>".$registro["nombre"]."</center></td>
                    <td><center>\n\t".$registro["precio"]."</center></td>
                    <td><center>\n\t".$registro["numSerie"]."</td>
                    <td><center><a href = '../productos/eliminarproducto.php?numSerie={$registro['numSerie']}'><img src = '../img/1eliminar.png'></a></td></center>
                    <td><center><a href = '../productos/modificarproductomenu.php?numSerie={$registro['numSerie']}'><img src = '../img/1modificar.png'></a></td></center>
                </tr>\n");
        }echo "</table>";
        
    }
    else{
        echo("Aun no hay registros en la base de datos ");
    }
    ?>
    <center>
</body>
</html>