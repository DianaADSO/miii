<?php

INCLUDE('encriptar.php');

function registrar_personas($clave){

    /*$nombre1 = password_hash($nombre, PASSWORD_DEFAULT, ['cost' => 12]);
    $clave1  = password_hash($clave, PASSWORD_DEFAULT, ['cost' => 12]);*/

    //$nombre = encriptar($nombre);
    $clave  = encriptar($clave);

    $connexion = new mysqli('localhost', 'root', 'root', 'ndb_proyecto_ddm');
    $consulta  = "INSERT INTO tb_usuarios(documento, nombre, clave) VALUE ('$clave')";
    $resultado = $connexion->query($consulta);


    $connexion->close();


}

echo registrar_personas(56, 'Camilo Figueroa', '$PLaTa267*%');

?>
