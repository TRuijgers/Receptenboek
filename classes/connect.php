<?php declare(strict_types=1);
require_once('./classes/collect.php');

abstract class Connect {
    public static function connectToDB(string $username, string $password){  
        $pdo = new PDO('mysql:host=localhost;dbname=recipebook', $username, $password);

        return new Collect($pdo);
    }
    public static function disconnectFromDB($pdo){
        $pdo = null;
    }
}