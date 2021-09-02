<?php

class Render {

    public static function displayIngredients($ingredients) {
        $output = "";
        foreach ($ingredients as $ing) {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"] . "<br>";
        }
        return $output;
    }

    public static function listRecipes($titles) {
        asort($titles);
        return implode(", <br>", $titles);
    }

    public static function shoppingList($shoppingList) {
        asort($shoppingList);
        return implode("<br>", $shoppingList);
    }

	public static function displayRecipe($recipe)//a static method means we don't need to create a "$var = new Render"
	{
		$output = "";
        $output .= $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "<br>";
        $output .= implode(",", $recipe->getTag());
        $output .= "<br>";
        $output .= self::displayIngredients($recipe->getIngredients()); //we use self:: to use a static method created in the same object
        return $output;
	}
}

?>