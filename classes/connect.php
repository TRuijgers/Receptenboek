<?php declare(strict_types=1);
require_once('./classes/collect.php');

class Connect {
    public static function connectToDB(){  
        $username = "root";
        $password = "";
        $pdo = new PDO('mysql:host=localhost;dbname=recipebook', $username, $password);

        return new Collect($pdo);
    }
    public static function disconnectFromDB($pdo){
        $pdo = null;
    }
}