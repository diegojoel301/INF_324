<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Alumnos</h1>
        <table border = "1px">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td colspan="2">Operaciones</td>
        </tr>
        <?php
        include "conexion.inc.php";
        $res = mysqli_query($con, "SELECT * FROM academico");
        while($datos = mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>".$datos["nombre"]."</td>";
            echo "<td>".$datos["paterno"]."</td>";
            echo "<td><a href='modificar.php?id=".$datos["id"]."'>Modificar</a></td>";
            echo "<td><a href='eliminar.php?id=".$datos["id"]."'>Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
        </table>
        <a href="modificar.php?operacion=1">Adicionar</a>
    </body>
</html>