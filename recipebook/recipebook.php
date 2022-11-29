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
    public function fetchData(int $id, string $table) : array{
        if ($table == 'preparation' ||$table == 'images'){
            $query = "SELECT * FROM `${table}` WHERE `recipes_id` = :id ORDER BY `${table}`.`sequence` ASC";
        } else {
            $query = "SELECT * FROM `${table}` WHERE `recipes_id` = :id";
        }
        $statement = $this->pdo->prepare($query);

        $statement->execute(array(
            ':id' => $id
        ));

        return $statement->fetchAll();
    }
    // public function fetchIngredients(int $id) : array{
    //     $query = "SELECT * FROM `ingredients` WHERE `recipes_id` = :id";

    //     $statement = $this->pdo->prepare($query);

    //     $statement->execute(array(
    //         ':id' => $id
    //      ));
 
    //     return $statement->fetchAll();
    // }
    // public function fetchTools(int $id) : array{
    //     $query = "SELECT * FROM `tools` WHERE `recipes_id` = :id";

    //     $statement = $this->pdo->prepare($query);

    //     $statement->execute(array(
    //         ':id' => $id
    //      ));
 
    //     return $statement->fetchAll();
    // }
    // public function fetchPreparation(int $id) : array{
    //     $query = "SELECT * FROM `preparation` WHERE `recipes_id` = :id ORDER BY `sequence` ASC";

    //     $statement = $this->pdo->prepare($query);

    //     $statement->execute(array(
    //         ':id' => $id
    //      ));
 
    //     return $statement->fetchAll();
    // }
    // public function fetchImages(int $id) : array{
    //     $query = "SELECT path FROM `images` WHERE `recipes_id` = :id ORDER BY `sequence` ASC";

    //     $statement = $this->pdo->prepare($query);

    //     $statement->execute(array(
    //         ':id' => $id
    //      ));
 
    //     return $statement->fetchAll();
    // }
}

