<?php declare(strict_types=1);
require_once('./classes/recipebook.php');

class Content {
    private $dataMap;

    public function __construct($dataMap)
    {
        $this->dataMap = $dataMap;
    }
    public function printAllRecipes(){
        $recipe_data = $this->dataMap->fetchData('recipes', 'ORDER BY id ASC');
        $image_data = $this->sortImages();
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
        // TODO Provide corresponding images
    }
    public function printRecipeData(string $column){
        $data = $this->dataMap->fetchRecipe();
        $content = $data[$column];

        echo "<h2>${content}</h2>";
    }
    // public function printIngredients(){
    //     $table = 'ingredients';
    //     $data = $this->dataMap->fetchJoinedData($table);
    //     foreach ($data as $key=>$value){
    //         echo "<li>${value['name']}</li>
    //         <span class='li-separator'></span>";
    //     }
    // }
    public function printUnorderedList(string $table){
        // Use for ingredients, tools and serving tips
        $data = $this->dataMap->fetchJoinedData($table);

        foreach ($data as $key=>$value){
            echo "<li>${value['name']}</li>
            <span class='li-separator'></span>";
        }
    }
    public function printOrderedList($table){
        // Use for preparation steps and serving tips
        $data = $this->dataMap->fetchJoinedData($table, 'ORDER BY recipes_preparation.sequence ASC');

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
    public function sortImages(){
        $images = array();
        $image_data = $this->dataMap->fetchData('images');
        $bridge_data = $this->dataMap->fetchColumn('images_id', 'recipes_images', 'WHERE sequence = 1');
        foreach ($image_data as $key=>$value_a){
            foreach ($bridge_data as $key=>$value_b){
                if ($value_b['images_id'] == $value_a['id']) array_push($images, $value_a['path']);
            }
        }
        return $images;
    }
}
