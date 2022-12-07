<?php declare(strict_types=1);
require_once('./classes/misc_functions.php');

class RecipeContent {
    private $recipes;
    private $images;
    private $ingredients;
    private $preparations;
    private $tools;
    private $background_info;

    public function __construct($recipes, $images = '', $ingredients = '', $preparation = '', $tools = '', $background_info = ''){
        $this->recipes = $recipes;
        $this->images = $images;
        $this->ingredients = $ingredients;
        $this->preparation = $preparation;
        $this->tools = $tools;
        $this->background_info = $background_info;
    }
    public function printRecipeContent(string $column){
        $data = $this->recipes;
        
        echo isset($data[$column])? $data[$column] : "";
    }
    public function printBackgroundInfo(int $position) {
        $data = $this->background_info;
        $info = isset($data[$position]['description'])? $data[$position]['description'] : "";

        echo "<p>${info}</p>";
    }
    public function printServingTip() {
        $data = $this->recipes;

        echo isset($data['serving_tip'])? "<h4>Serveertip:</h4><p>${data['serving_tip']}</p>" : "";
    }
    public function printIngredientsList(){
        $data = Misc::sortIngredients($this->ingredients);

        $list_string = "";
        foreach ($data as $key_a=>$list){
            $list_string .= "<ul>". $this->printSublist($list) . $this->printIngredient($data, $key_a) ."</ul>";
        }
        echo $list_string;
    }
    private function printSublist(array $list){
        $title = isset($list[0]['sublist'])? $list[0]['sublist'] : "Ingrediënten";

        return "<h5>${title}:</h5>";
    }
    private function printIngredient(array $data, int $key){
        $list_string = "";
        foreach ($data[$key] as $key_b=>$ingredient){
            $quantity = Misc::checkIngredientQuantity($ingredient);
            $list_string .= "<li>${quantity}${ingredient['name']}</li><span class='li-separator'></span>";
        }
        return $list_string;
    }
    public function printToolsList(){
        $data = $this->tools;

        if (isset($data[0])) {
            $list_string = "<ul><h5>Hulpmiddelen:</h5>";
            foreach ($data as $key=>$value){
                $list_string .= "<li>${value['name']}</li><span class='li-separator'></span>";
            }
            $list_string .= "</ul>";
            echo $list_string;
        }
    }
    public function printPreparationList(){
        $data = $this->preparation;

        foreach ($data as $key=>$value){
            echo "<li>${value['description']}</li>
            <span class='li-separator'></span>";
        }
    }
    public function printImage(int $position){
        $data = $this->images;

        echo isset($data[$position]['path'])? $data[$position]['path'] : "";
    }
}