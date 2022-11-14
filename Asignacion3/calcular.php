<?php
if(!$_POST) {
    header('Location:index.html');
}
$tabla = $_POST['tabla'];
$nMaximo = $_POST['maximo'];
$multiplicador = 1;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tabla de multiplicar</title>
        <link rel="stylesheet" href="estilos2.css">
    </head>
<body>
    <h1>Tabla del <?php echo $tabla ?></h1>
    <?php
    while($multiplicador <= $nMaximo){
        echo "<p>{$tabla} * {$multiplicador} = " . $tabla * $multiplicador . "</p>";
        $multiplicador++;
    }
    ?>
</body>
</html>