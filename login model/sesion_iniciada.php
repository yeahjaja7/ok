<?php
require '../../assets/conexion/conexion.php';


session_start();

if(!isset($_SESSION['correo_u_i']))
{
    echo '<script>alert("Por favor inicia sesion"); window.location ="../../index.php"</script>';
    session_destroy();
    die();
}

$correo=$_SESSION['correo_u_i'];



$query= "SELECT * FROM users WHERE correo_u='$correo'";
$resultado=mysqli_query($mysqli,$query);

while ($row=$resultado->fetch_assoc())
{
    $id_user = $row['id_user'];
    $nombre_full_u=$row['nombre_full_u'];
    $correo_u =$row['correo_u'];
    $rol_u =$row['rol_u'];
}



?>