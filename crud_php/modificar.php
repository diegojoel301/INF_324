<?php
    include "conexion.inc.php";

    if(isset($_GET['operacion']))
    {
        $id = "";
        $nombre= "";
        $paterno = "";
    }
    else
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM academico WHERE id=$id";
        $resultado = mysqli_query($con, $sql);
        $datos = mysqli_fetch_array($resultado);
        $id = $datos['id'];
        $nombre = $datos['nombre'];
        $paterno = $datos['paterno'];
    }
    

    
?>

<form action="modificarG.php" method="POST">

    <?php
        if(isset($_GET["operacion"]))
            echo "<input type='hidden' name='operacion' value='operacion'/>";
    ?>

    <label>Id</label>
    <input type="text" name="id" value="<?php echo $id;?>" <?php if (!isset($_GET['operacion'])) echo "readonly"; ?>/>
    <br/>
    <label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo $nombre;?>"/>
    <br/>
    <label>Paterno</label>
    <input type="text" name="paterno" value="<?php echo $paterno;?>"/>
    <br/>
    <input type="submit" name="aceptar" value="aceptar"/>
    <input type="submit" name="cancelar" value="cancelar"/>
    
    
</form>