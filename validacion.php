<?php

include("funciones.php");

$usuario       = $_GET['usuario'];
$clave         = $_GET['clave'];


echo validacion($usuario, $clave);

?>

