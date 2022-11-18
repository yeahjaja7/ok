<?php 
session_start();
unset($_SESSION["correo_u_i"]);
session_destroy();

echo'OK';

?>