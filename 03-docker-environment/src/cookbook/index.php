<?php

include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/cookbook.php";

$cookbook = new RecipeCollection;
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);

echo Render::shoppingList($cookbook->getCombinedIngredients());

?>