<?php
    include "conexion.inc.php";
    $id= $_GET['id'];

    $sql = "DELETE FROM academico WHERE id=$id";
    mysqli_query($con, $sql);
?>

<img height="30" width="30" src="./imagenes/eliminar.jpg"/>
<br/>
<a href="index.php">Volver</a>