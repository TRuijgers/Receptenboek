<?php declare(strict_types=1);

class PageContent {
    private $recipes;
    private $images;
    private $ingredients;
    private $preparations;
    private $tools;
    private $serving_tips;

    public function __construct($recipes, $images = '', $ingredients = '', $preparation = '', $tools = '', $serving_tips = ''){
        $this->recipes = $recipes;
        $this->images = $images;
        $this->ingredients = $ingredients;
        $this->preparation = $preparation;
        $this->tools = $tools;
        $this->serving_tips = $serving_tips;
    }
    public function printAllRecipes(){
        $recipe_data = $this->recipes;
        $image_data = $this->images;
        foreach ($recipe_data as $key=>$value){
            echo 
                "<li>
                    <button formaction='recipe.php?id=${value['id']}' type='submit' name=\"${value['id']}\" id=\"${value['id']}\">
                        <img src=\"${image_data[$key]}\">
                            <div class='centered'>
                                <h3>${value['title']}</h3>
                            </div>
                        </img>
                    </button>
                </li>";
        }
    }
    public function printRecipeContent(string $column){
        $data = $this->recipes;
        
        $content = $data[$column];

        echo $content;
    }
    public function printIngredientsList(){
        $data = $this->sortIngredients($this->ingredients);
        foreach ($data as $key_a=>$value_a){
            if (isset($value_a[$key_a]['segment'])){
                $segment = $value_a[$key_a]['segment'];
                echo "<h4>${segment}</h4>";
            }
            foreach ($data[$key_a] as $key_b=>$value_b){
                $quantity = $this->checkQuantity($value_b);
                echo "<li><span>${quantity}</span>${value_b['name']}</li><span class='li-separator'></span>";
            }
        }
    }
    public function printToolsList(){
        $data = $this->tools;

        foreach ($data as $key=>$value){
            echo "<li>${value['name']}</li>
            <span class='li-separator'></span>";
        }
    }
    public function printPreparationList(){
        // Use for preparation steps
        $data = $this->preparation;

        foreach ($data as $key=>$value){
            echo "<li>${value['description']}</li>
            <span class='li-separator'></span>";
        }
    }
    public function printImage(int $position){
        $data = $this->images;

        $item = $data[$position-1]['path'];
        echo "<img src=\"$item\" alt=\"\">";
    }
    public function printServingTip(int $position){
        $data = $this->serving_tips;

        $item = $data[$position-1]['description'];
        echo "<img src=\"$item\" alt=\"\">";
    }
    public function checkQuantity(array $ingredient){
        $quantity = "";
        if (isset($ingredient['quantity'])) {
            $quantity = $ingredient['quantity'] . "\n";
        } else {
            return $quantity;
        }
        if (isset($ingredient['unit'])) $quantity .= $ingredient['unit'] . "\n";
        return $quantity;
    }
    public function sortIngredients(array $data){
        $sorted_data = array(array());
        $count = 0; 
        for ($i = 0; $i < count($data); $i++){
            if (isset($data[$i+1]['segment'])) {
                if (!($data[$i]['segment'] == $data[$i+1]['segment'])) {
                    $count++;
                    array_push($sorted_data, array($data[$i]));
                } else {
                    array_push($sorted_data[$count], $data[$i]);
                }
            } else {
                array_push($sorted_data, array($data[$i]));
            }
        }
        return $sorted_data;
    }
}