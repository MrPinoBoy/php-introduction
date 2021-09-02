<?php

    class RecipeCollection
    {
        private $title;
        private $recipes = array();

        public function setTitle($title) {
            $this->title = $title;
        }

        public function getTitle() {
            return $this->title;
        }

        public function addRecipe($recipe) {
            $this->recipes[] = $recipe;
        }

        public function getRecipe() {
            return $this->recipes;
        }

        public function getRecipeTitles() {
            $titles = array();
            foreach ($this->recipes as $recipe) {
                $titles[] = $recipe->getTitle();
            }
            return array_values($titles);
        }

        public function filterByTag($tag) {
            $taggedRecipes = array();
            foreach ($this->recipes as $recipe) {
                if (in_array(strtolower($tag), $recipe->getTag())) {
                    $taggedRecipes[] = $recipe;
                }
            }
            return $taggedRecipes;
        }

        public function getCombinedIngredients() {
            $shoppingList = array();
            foreach ($this->recipes as $recipe) {
                $shoppingList[] = Render::displayIngredients($recipe->getIngredients());
            }
            return $shoppingList;
        }
    }
?>