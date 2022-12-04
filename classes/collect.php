<?php declare(strict_types=1);

class Collect {
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
    public function fetchImages() : array{
        $query = "SELECT images.path FROM images 
            WHERE images.id 
            IN (SELECT images_id 
                FROM recipes_images 
                WHERE sequence = 1 
                ORDER BY recipes_images.recipes_id ASC)";

        $statement = $this->pdo->prepare($query);

        $statement->execute();
    
        return $statement->fetchAll();
    }
    public function fetchData(string $table, string $condition = '') : array {
        $query = "SELECT * FROM `${table}` ${condition}";

        $statement = $this->pdo->prepare($query);

        $statement->execute();
 
        return $statement->fetchAll();
    }
    public function fetchJoinedData(string $table, string $condition = '') : array{
        $bridge_table = 'recipes_' . $table;
        $column = $table . '_id';
        $query = "SELECT * FROM `${bridge_table}`
            RIGHT JOIN `${table}` 
            ON `${bridge_table}`.`${column}` = `${table}`.`id` 
            WHERE `${bridge_table}`.`recipes_id` = :id
            ${condition}";
        $statement = $this->pdo->prepare($query);

        $statement->execute(array(
            ':id' => $_GET['id']
        ));
        return $statement->fetchAll();
    }
}