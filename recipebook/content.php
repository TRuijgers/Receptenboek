<?php declare(strict_types=1);
require_once('./recipebook/recipebook.php');

class Content {
    private $dataMap;

    public function __construct($dataMap)
    {
        $this->dataMap = $dataMap;
    }
    public function printAllRecipes(){
        $data = $this->dataMap->fetchAllRecipes();
        foreach ($data as $key=>$value){
            echo "<li>
            <button formaction='recipe.php?id=${value['id']}' 
            type='submit' name=\"${value['id']}\" id=\"${value['id']}\">
            </button>
            </li>";
        }
        // TODO Provide corresponding images
    }
    public function printRecipe(){
        $data = $this->dataMap->fetchRecipe();
        $title = $data['title'];

        echo "<h2>${title}</h2>";
    }
    public function printIngredients(){
        $table = 'ingredients';
        $data = $this->dataMap->fetchJoinedData($table);
        foreach ($data as $key=>$value){
            echo "<li>${value['name']}</li>
            <span class='li-separator'></span>";
        }
    }
    public function printPreparationSteps(){
        $table = 'preparation';
        $data = $this->dataMap->fetchJoinedData($table);

        foreach ($data as $key=>$value){
            echo "<li>${value['description']}</li>
            <span class='li-separator'></span>";
        }
    }
    public function printImages(int $position){
        $table = 'images';
        $data = $this->dataMap->fetchJoinedData($table);

        $img = $data[$position-1]['path'];
        echo "<img src=\"$img\" alt=\"\">";
    }
}