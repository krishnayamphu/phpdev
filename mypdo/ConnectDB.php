<?php

namespace mypdo;

use PDO;
use PDOException;

class ConnectDB
{
    public static function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "phpdb";
        $con = null;
        try {
            $con = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $con;
    }

}
