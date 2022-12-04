<?php declare(strict_types=1);

class Misc {
    public static function sortIngredients(array $ingredients){
        $sorted_data = array(array());
        $count = 0;
        for ($i = 0; $i < count($ingredients); $i++){
            if (isset($ingredients[$i-1]['segment'])) {
                if (!($ingredients[$i]['segment'] == $sorted_data[$count][0]['segment'])) {
                    $count++;
                    array_push($sorted_data, array());
                }
            }
            array_push($sorted_data[$count], $ingredients[$i]);
        }
        return $sorted_data;
    }
    public static function checkIngredientQuantity(array $ingredient){
        $quantity = isset($ingredient['quantity'])? $ingredient['quantity'] . "\n" : "";

        if (isset($ingredient['unit'])) $quantity .= $ingredient['unit'] . "\n";
        return $quantity;
    }
}