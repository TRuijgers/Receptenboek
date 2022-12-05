<?php declare(strict_types=1);
require_once('./classes/misc_functions.php');

class RecipeContent {
    private $recipes;
    private $images;
    private $ingredients;
    private $preparations;
    private $tools;
    private $serving_tips;
    private $background_info;

    public function __construct($recipes, $images = '', $ingredients = '', $preparation = '', $tools = '', $serving_tips = '', $background_info = ''){
        $this->recipes = $recipes;
        $this->images = $images;
        $this->ingredients = $ingredients;
        $this->preparation = $preparation;
        $this->tools = $tools;
        $this->serving_tips = $serving_tips;
        $this->background_info = $background_info;
    }
    public function printRecipeContent(string $column){
        $data = $this->recipes;
        
        if (isset($data[$column])) echo $data[$column];
    }
    public function printIngredientsList(){
        $data = Misc::sortIngredients($this->ingredients);

        $list_string = "";
        foreach ($data as $key_a=>$list){
            $list_string .= "<ul>". $this->printSegment($list) . $this->printIngredient($data, $key_a) ."</ul>";
        }
        echo $list_string;
    }
    public function printSegment(array $list){
        $title = "Ingrediënten";
        if (isset($list[0]['segment'])){
            $title = $list[0]['segment'];
        }
        return "<h4>${title}:</h4>";
    }
    public function printIngredient(array $data, int $key){
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
            $list_string = "<ul><h4>Hulpmiddelen:</h4>";
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

        if (isset($data[$position]['path'])) echo $data[$position]['path'];
    }
    public function printServingTip(int $position){
        $data = $this->serving_tips;

        if (isset($data[$position]['description'])) echo $data[$position]['description'];
    }
    public function printBackgroundInfo(int $position) {
        $data = $this->background_info;

        if (isset($data[$position]['description'])) echo $data[$position]['description'];
    }
}