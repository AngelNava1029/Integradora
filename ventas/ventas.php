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
    <title>Ventas</title>
</head>

<body background="2agencia.png">
    <center>
    <span style="font-size: 24px;"><a href="../productos/productos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Productos</a>
    <a href="../usuarios/usuarios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Usuarios</a>
    <a href="../accesorios/accesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Accesorios</a>
    <a href="../catalogos/catalogosmotos.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Catalogos De Motos</a> 
    <a href="../catalogos/catalogosaccesorios.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Catalogos De Accesorios</a>
    <a href="../cerrarsesion.php"style="font-family: Times New Roman;border: 5px solid #000000; padding: 5px;text-decoration: none;color: #000000;background-color: #ffffff">Cerrar Sesion</a><br></br></span>
        <center><t1 style = "font-size:50px;color:#0DB5A9;">VENTAS</t1></center><br></br>
        <center>
    
    
<form action="buscarventa.php" method = "post">
<fieldset style="width:0px; border: solid 5px #000000; background-color:#0DB5A9">
    <font face='Times New Roman' size='5'>BUSCAR VENTA</font><br></br>
        ID: <input name = "id" type="text" value = ""><br>
        <input type ="submit"style="color: black; background-color:white;font-size: 20px; font-family: Times New Roman;  border: 4px solid black; padding: 10px; margin: 5px; border-radius: 40px;" value = 'Buscar Venta'><br></br>
    </fieldset>
  </center>
  </form><br></br>
  
  <?php
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryventas = "SELECT * FROM ventas
    JOIN venta_detalles ON ventas.id = venta_detalles.id_venta";
    
    $comando = mysqli_query($conn , $sqlqueryventas);
        if($comando->num_rows > 0){    
            echo "<table border='2' bgcolor = '#ffffff'>
            <tr>
                <tr><th>id</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>ELIMINAR</th>
            </tr>";
        while($registro = $comando->fetch_assoc()){
            echo("\n\t<tr>\n\t
                    <td><center>".$registro["id"]."</center></td>
                    <td><center>\n\t".$registro["fecha"]."</center></td>
                    <td><center>\n\t".$registro["hora"]."</center></td>
                    
                    <td><center><a href = '../ventas/eliminarventa.php?id={$registro['id']}'><img src = '../img/1eliminar.png'></a></td></center>
                </tr>\n");
            }echo "</table>";

            }else
            {
                echo("Aun no hay registros en la base de datos ");
            }

?>
</center>
</body>
</html>