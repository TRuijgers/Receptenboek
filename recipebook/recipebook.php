<?php declare(strict_types=1);

class Recipebook {
    public static function connectToDatabase(){
        $user = "root";
        $pass = "";
        $databaseHost = new PDO('mysql:host=localhost;dbname=receptenboek', $user, $pass);

        return $databaseHost;
    }
    public static function fetchRecipe($databaseHost){
        $queryStatement = $databaseHost->query('SELECT * FROM recepten WHERE id=1');

        $rows = $queryStatement->fetchAll();
        
        return $rows;
    }
}

