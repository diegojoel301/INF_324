<?php
    class Conexion extends PDO
    {
        private $servidor = "localhost";
        private $usuario = "root";
        private $clave = "";
        private $db = "academico";
        public function __construct()
        {
            try
            {
                parent::__construct("mysql:host=".$this->servidor.";dbname=".$this->db.";charset=utf8",$this->usuario,$this->clave,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            }
            catch (PDOException $e)
            {
                echo "Error: ".$e->getMessage();
                exit;
            }
            
        }
    }
?>