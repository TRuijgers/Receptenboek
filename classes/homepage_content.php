<?php declare(strict_types=1);
require_once('./classes/misc_functions.php');

class HomeContent {
    private $recipes;
    private $images;

    public function __construct($recipes, $images){
        $this->recipes = $recipes;
        $this->images = $images;
    }
    public function printAllRecipes(){
        $recipe_data = $this->recipes;
        $image_data = $this->images;
        
        for ($i = 0; $i < 3; $i++){
            echo $this->printListItem($recipe_data[$i], $i);
        }
    }
    private function printListItem(array $value, int $key) : string{
        $value_string = $this->printButton($value, $key);
        $item_string = "<li>${value_string}</li>";

        return $item_string;
    }
    private function printButton(array $value, int $key) : string{
        $value_string = $this->printImage($value, $key);
        $button_string = "<button formaction='recipe.php?id=${value['id']}' type='submit' name=\"${value['id']}\" id=\"${value['id']}\">${value_string}</button>";

        return $button_string;
    }
    private function printImage(array $value, int $key) : string{
        $image_data = $this->images;
        $value_string = $this->printTitle($value, $key);
        $image_string = "<img src=\"${image_data[$key]}\">${value_string}</img>";

        return $image_string;
    }
    private function printTitle(array $value) : string{
        $title_string = "<div class='centered'><h3>${value['title']}</h3></div>";

        return $title_string;
    }
}