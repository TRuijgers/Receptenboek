<?php declare(strict_types=1);

abstract class Misc {
    public static function sortIngredients(array $ingredients) : array{
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
    public static function checkIngredientQuantity(array $ingredient) : string{
        $quantity = isset($ingredient['quantity'])? "<span class=\"quantity\">${ingredient['quantity']}</span>\n" : "";

        $quantity .= isset($ingredient['unit'])? "<span class=\"unit\">${ingredient['unit']}</span>\n" : "";
        return $quantity;
    }
}