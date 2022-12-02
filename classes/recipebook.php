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
    public function fetchOrderedRecipes(string $order = 'id', int $limit = 24) : array{
        $query = "SELECT * FROM `recipes` ORDER BY `${order}` LIMIT `${limit}`";

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
    public function fetchColumn(string $column, string $table, string $condition = '') : array {
        $query = "SELECT `${column}` FROM `${table}` ${condition}";

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

