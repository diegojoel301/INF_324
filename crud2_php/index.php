<?php
    include "conexion.php";
    $pdo = new Conexion();

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        if(isset($_GET["id"]))
        {
            $sql = $pdo->prepare("SELECT *  FROM alumno WHERE id=:id");
            $sql->bindValue(":id", $_GET["id"]);
            
            $sql->execute();
            
            
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 Tengo Datos");
            
            echo json_encode($sql->fetchAll());
            exit;
        }
        else
        {
            $sql = $pdo->prepare("SELECT *  FROM alumno");
    
            $sql->execute();
            
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/1.1 200 Tengo Datos");
            
            echo json_encode($sql->fetchAll());
            exit;
        }
    }
    if($_SERVER["REQUEST_METHOD"] == "DELETE")
    {
        $sql = $pdo->prepare("DELETE FROM alumno WHERE id=:id");
        $sql->bindValue(":id", $_GET["id"]);
        
        $sql->execute();
        
        
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 Tengo Datos");
        
        echo json_encode($sql->fetchAll());
        exit;  
    }
    
    if($_SERVER["REQUEST_METHOD"] == "PUT")
    {
        echo "Test";
        $input = json_decode(file_get_contents('php://input'), TRUE);
        echo file_get_contents('php://input');
        echo "$input";
        
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $sql = $pdo->prepare("INSERT INTO alumno(id, nombre, paterno, departamento) VALUES (:id, :nombre, :paterno, :departamento)");

        $sql->execute(array(":id" => $_POST["id"],
                            ":nombre" => $_POST["nombre"],
                            ":paterno" => $_POST["paterno"],
                            ":departamento" => $_POST["departamento"]
        ));
        //$sql->execute();
        
        
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 Tengo Datos");
        
        echo json_encode($sql->fetchAll());
        exit;
    }
    ?>