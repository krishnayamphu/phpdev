<?php

namespace mypdo;
use PDO;
use PDOException;

class Connect
{
    public static function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "phpdb";
        try {
            $con = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            // set the PDO error mode to exception
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";
        } catch (PDOException $e) {
//            echo "Connection failed: " . $e->getMessage();
            echo "Connection failed: ";
        }
    }

}

Connect::connect();

