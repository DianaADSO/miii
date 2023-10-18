<?php

include('encriptar.php');

function desemcriptar($documento){

    $salida = " ";

    $nombre =" ";

    $connexion = new mysqli('localhost', 'root', 'root', 'db_prac1');
    $consulta  = "SELECT (nombre) from personas where documento = '$documento'";
    $resultado = $connexion->query($consulta);

    while($fila = mysqli_fetch_array($resultado)){

        $salida .= $fila[0];


        $connexion->close();

        $nombre = desencriptar($salida);
    }
    

    return $nombre;
    
}

echo desemcriptar('45');

?>