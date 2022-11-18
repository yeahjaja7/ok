<?php 

require_once '../../assets/conexion/conexion.php';



if(!empty($_POST))
{
$usuario=mysqli_real_escape_string($mysqli,$_POST['correo_u_i']);
$contra=mysqli_real_escape_string($mysqli,$_POST['password1']);


        session_start();
        $_SESSION['correo_u_i']=$usuario;
        $query= "SELECT * FROM users WHERE correo_u='$usuario' and contra_u='$contra'";
        $resultado=mysqli_query($mysqli,$query);
        $filas=mysqli_num_rows($resultado);
        
        if ($filas>0)
        {
        $_SESSION['correo_u_i']=$usuario;
        echo 'correcto';
        }
        else
        {
        
                session_destroy();

                echo 'No existe o correo incorrecto';
        }
        mysqli_free_result($resultado);
        mysqli_close($mysqli);

        
}

?>