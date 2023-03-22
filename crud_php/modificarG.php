<?php
if (isset($_POST["cancelar"]))
	header("Location: index.php");
else
{
	include "conexion.inc.php";
	$id=$_POST["id"];
	$nombre=$_POST["nombre"];
	$paterno=$_POST["paterno"];

    if(!isset($_POST["operacion"]))
    {
        $sql="UPDATE academico SET nombre='$nombre', paterno='$paterno' WHERE id=$id";
    }
    else
    {
        $sql="INSERT academico(id, nombre, paterno) VALUES ($id, '$nombre', '$paterno')";
    }


	mysqli_query($con, $sql);
}
?>
<img height="30" width="30" src="./imagenes/guardar.jpg"/>
<br/>
<a href="index.php">Volver</a>