<?php 
    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryselectaccesorios = "INSERT INTO accesorios (nombre_ac,precio) VALUE('".$_POST['nombre_ac']."'".'  ,  '."'".$_POST['precio']."');";
    echo $sqlqueryselectaccesorios;
    $comando = mysqli_query($conn , $sqlqueryselectaccesorios);
    header('Location: accesorios.php');
    
?>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=a">
    <title>Usuarios</title>
</head>
<body>
    <a href = "accesorios.php"> Accesorios</a>
</body>
</html>