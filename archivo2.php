<?php



function datos()
{

    $usuario       = $_GET['usuario'];

    $salida = " ";
    $connexion = new mysqli('localhost', 'root', 'root', 'db_proyecto_ddm');
    $consulta  = "SELECT nombres, usuario, email,clave FROM tb_usuarios where usuario='$usuario'";
    $resultado = $connexion->query($consulta);

    if ($resultado == true) {

        while ($fila = mysqli_fetch_assoc($resultado)) {

            $salida .= $fila['nombres'] . "<br>";
            $salida .= $fila['usuario'] . "<br>";
            $salida .= $fila['email'] . "<br>";
            $salida .= $fila['clave'] . "<br>";
        }
    }

    return $salida;
    $connexion->close();
}

echo datos();
?>

<a href="borrar.php">Borrar mi cuenta</a>