<?php
 $conn = new mysqli("localhost", "root", "", "pos");
 $sqlqueryvalidar = "SELECT email FROM usuarios WHERE email = '".$_POST['email']."' AND contrasena = '" .$_POST['contrasena']."';";
 echo $sqlqueryvalidar;
 
 $comando = mysqli_query($conn , $sqlqueryvalidar);

 if($comando -> num_rows == 1)
    { 
        session_start();
        $_SESSION['usuario'] = $_POST['email'];
        header("location:menu.php");
    }
    else
    {
        header("location: index.php?error=100");
    }

?>