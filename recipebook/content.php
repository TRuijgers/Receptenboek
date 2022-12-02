<?php declare(strict_types=1);
require_once('./recipebook/recipebook.php');

class Content {
    public static function printRecipe($id, $map){
        $data = $map->fetchRecipe($id);
        $title = $data[0]['title'];

        echo "<h2>${title}</h2>";
    }
    public static function printIngredients($id, $map){
        $table = 'ingredients';
        $data = $map->fetchJoinedData($id, $table);
        foreach ($data as $key=>$value){
            echo "<li>${value['name']}</li><span class='li-separator'></span>";
        }
    }
    public static function printPreparationSteps($id, $map){
        $table = 'preparation';
        $data = $map->fetchJoinedData($id, $table);

        foreach ($data as $key=>$value){
            echo "<li>${value['description']}</li><span class='li-separator'></span>";
        }
    }
    public static function printImages($id, $position, $map){
        $table = 'images';
        $data = $map->fetchJoinedData($id, $table);

        $img = $data[$position-1]['path'];
        echo "<img src=\"$img\" alt=\"\">";
    }
}