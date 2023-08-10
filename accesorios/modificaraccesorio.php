<?php 

    $conn = new mysqli("localhost","root","","pos");
    $sqlqueryupdateaccesorio = "UPDATE accesorios SET nombre_ac = '{$_POST['nombre_ac']}', precio = '{$_POST['precio']}'WHERE id_ac = '{$_POST['id_ac']}';";
    $conn = new mysqli("localhost","root","","pos");
    $comando = mysqli_query($conn , $sqlqueryupdateaccesorio);
    header('Location: accesorios.php');

?>  