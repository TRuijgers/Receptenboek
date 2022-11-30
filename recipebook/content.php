<?php declare(strict_types=1);
require_once('./recipebook/recipebook.php');

class LoadContent {
    public function printRecipe(){
        fetchJoinedData($id, $table);

    }
    public function printIngredients($id){

        Recipebook::fetchJoinedData($id, $table);
        foreach ($ingredients as $key=>$value){
            echo "<li>${value['name']}</li><span class='li-separator'></span>";
        }
    }
    public function printPreparationSteps($id){
        $table = 'preparation';
        Recipebook::fetchJoinedData($id, $table);

        foreach ($preparation as $key=>$value){
            echo "<li>${value['description']}</li><span class='li-separator'></span>";
        }
    }
    public function printImagePaths($id, $position){
        Recipebook::fetchJoinedData($id, $table);
    }
}