<?php declare(strict_types=1);
require_once('./classes/collect.php');
require_once('./classes/recipepage_content.php');
require_once('./classes/homepage_content.php');

class FeedContent {
    private $dataMap;

    public function __construct($dataMap)
    {
        $this->dataMap = $dataMap;
    }
    public function feedHomePage(){
        $recipe_data = $this->dataMap->fetchData('recipes', 'ORDER BY id ASC');
        $image_data = array_merge(...($this->dataMap->fetchImages()));
        $data_bundle = new HomeContent($recipe_data, $image_data);

        return $data_bundle;
    }
    public function feedRecipePage(){
        $recipe_data = $this->dataMap->fetchRecipe();
        $image_data = $this->dataMap->fetchJoinedData('images', 'ORDER BY recipes_images.sequence ASC');
        $ingredient_data = $this->dataMap->fetchJoinedData('ingredients', 'ORDER BY recipes_ingredients.sublist ASC');
        $preparation_data = $this->dataMap->fetchDataById('preparation', 'ORDER BY preparation.sequence ASC');
        $tool_data = $this->dataMap->fetchJoinedData('tools');
        $background_data = $this->dataMap->fetchDataById('background_info', 'ORDER BY background_info.sequence ASC');

        $data_bundle = new RecipeContent($recipe_data, $image_data, $ingredient_data, $preparation_data, $tool_data, $background_data);

        return $data_bundle;
    }
}
