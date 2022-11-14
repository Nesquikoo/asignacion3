<?php
$conexion=mysqli_connect('localhost','root','','bd_mcdonalds_jfx');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Mostrar datos</title>
    </head>
<body>
    <br>
    <table>
        <tr>
            <td>idEmpleado</td>
            <td>nombresEmpleado</td>
            <td>primerApellido</td>
            <td>segundoApellido</td>
            <td>fechaIngreso</td>
        </tr>
        <?php 
        $sql='SELECT * from tbl_empleados_jfx';
        $result=mysqli_query($conexion.$sql);
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $mostrar ['idEmpleado']?> </td>
            <td> <?php echo $mostrar ['nombresEmpleado']?> </td>
            <td> <?php echo $mostrar ['primerApellido']?> </td>
            <td> <?php echo $mostrar ['segundoApellido']?> </td>
            <td> <?php echo $mostrar ['fechaIngreso ']?> </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>