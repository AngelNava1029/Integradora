<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
</head>

<body background="2agencia.png">
<center>
<h1 style="color:#000000;">Detalles De Venta</h>
<br></br>
<?php
   
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryselect = "SELECT id,fecha,hora FROM ventas WHERE id= '".$_POST['id']."';";
    
    $comando = mysqli_query($conn , $sqlqueryselect);
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
                    <td>".$registro["id"]."</td>
                    <td>\n\t".$registro["fecha"]."</td>
                    <td>\n\t".$registro["hora"]."</td>
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
