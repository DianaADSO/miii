<?php

function registrar_personas($nombres, $usuario, $email,  $clave)
{


    $connexion = new mysqli('localhost', 'root', 'root', 'db_proyecto_ddm');
    $consulta  = "INSERT INTO tb_usuarios ( nombres, usuario,email, clave) values ('$nombres', '$usuario', '$email',  '$clave')";
    $resultado = $connexion->query($consulta);


    $connexion->close();
}


function validacion($usuario, $clave)
{

    $salida = " ";
    $connexion = new mysqli('localhost', 'root', 'root', 'db_proyecto_ddm');
    $consulta  = "SELECT * FROM tb_usuarios WHERE usuario = '$usuario' and clave = '$clave'";
    $resultado = $connexion->query($consulta);


    if ($salida = $resultado->fetch_object()) {

        $salida = "Actualmente ese usuario se encuentra registrado";

        header("location: archivo2.php?usuario=$usuario&clave=$clave");
    } else {


        $salida = "Actualmente ese usuario no se encuentra registrado";
        header("location: archivo3.php?usuario=$usuario&clave=$clave");
    }

    return $salida;
    $connexion->close();
}


function borrar($usuario){

    $salida = "";

    $connexion = new mysqli('localhost', 'root', 'root', 'db_proyecto_ddm');
    $consulta  = "set sql_safe_updates = 0";
    $resultado = $connexion->query($consulta);

    
    if($resultado == true){

        $borrar  = "DELETE FROM `db_proyecto_ddm`.`tb_usuarios` WHERE (`usuario` = '$usuario')";
        $resultado2 = $connexion->query($borrar);

        if
        ($resultado2 == true){

            $salida = "Tus datos han sido eliminado de la base";

        }else{

            $salida = "Vuelve a intentarlo";
        }
       

    }else{

        $salida = "No tiene el permiso de borrar";
        
    }


    return $salida;

    
}
?>