<?php

class Database 
{

    private $hostname = "sql103.infinityfree.com";
    private $database = "if0_38237777_phonerosa";
    private $username = "if0_38237777";
    private $password = "JBJ3ET9mJMBq";
    private $charset = "utf8";

    function conectar ()
    {
        try {
            $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false 
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }

}
