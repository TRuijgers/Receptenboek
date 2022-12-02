<?php declare(strict_types=1);

class Recipebook {
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function fetchRecipe() : array{
        $query = "SELECT * FROM `recipes` WHERE `id` = :id";

        $statement = $this->pdo->prepare($query);

        $statement->execute(array(
            ':id' => $_GET['id']
        ));
 
        return $statement->fetch();
    }
    public function fetchAllRecipes() : array{
        $query = "SELECT * FROM `recipes` LIMIT 6";

        $statement = $this->pdo->prepare($query);

        $statement->execute();
 
        return $statement->fetchAll();
    }
    public function fetchJoinedData(string $table) : array{
        $bridge_table = 'recipes_' . $table;
        $column = $table . '_id';
        $query = "SELECT * FROM `${bridge_table}`
            RIGHT JOIN `$table` 
            ON `${bridge_table}`.`${column}` = `${table}`.`id` 
            WHERE `${bridge_table}`.`recipes_id` = :id";
        $statement = $this->pdo->prepare($query);

        $statement->execute(array(
            ':id' => $_GET['id']
        ));
        return $statement->fetchAll();
    }
}

