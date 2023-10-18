<?php

INCLUDE('encriptar.php');
include("funciones.php");

$nombres       = $_GET['nombres'];
$usuario       = $_GET['usuario'];
$email           = $_GET['email'];
$clave         = $_GET['clave'];



echo registrar_personas($nombres, $usuario, $email,  $clave);

?>