

<?php

include("funciones.php");

$usuario = $_GET['usuario'];

?>

<html>

<head>
    <title>Consulta individual.</title>
</head>

<body>

    <?php

    echo borrar($usuario);

  

    ?>


</body>

</html>
?>