<?php declare(strict_types=1);

class Recipebook {
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function fetchRecipe(int $id) : array{
        $query = "SELECT * FROM `recipes` WHERE `id` = :id";

        $statement = $this->pdo->prepare($query);

        $statement->execute(array(
            ':id' => $id
        ));
 
        return $statement->fetchAll();
    }
    public function fetchJoinedData(int $id, string $table) : array{
        $b_table = 'recipes_' . $table;
        $column = $table . '_id';
        $query = "SELECT * FROM `${b_table}`
            RIGHT JOIN `$table` 
            ON `${b_table}`.`${column}` = `${table}`.`id` 
            WHERE `${b_table}`.`recipes_id` = :id";
        $statement = $this->pdo->prepare($query);

        $statement->execute(array(
            ':id' => $id
        ));
        return $statement->fetchAll();

    }
}

