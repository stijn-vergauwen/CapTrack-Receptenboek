<?php

class IngredientController {

    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getIngredientsFromRecipe(int $id) : array {

        return $this->database->queryToClass(
            "SELECT * FROM `recipes_ingredients`
            RIGHT JOIN `ingredients`
            ON ingredients.id = recipes_ingredients.ingredient_id
            WHERE recipes_ingredients.recipe_id = $id"
      
        , "Ingredient");
    }

    function generateRecipeIngredients(int $recipeId, ComponentLoader $componentLoader) : string {
        $ingredientsList = "";
        
        $ingredients = $this->getIngredientsFromRecipe($recipeId);
        foreach($ingredients as $ingredient) {
            $ingredientsList .= $componentLoader->setComponentVariables(
                $componentLoader->getComponentFromFile("IngredientItem.html"),
                array("{ingredientTitle}", "{ingredientAmountType}", "{ingredientAmount}"),
                array($ingredient->title, $this->checkIngredientAmountType((string)$ingredient->amount_type), $ingredient->amount)
            );
      }
    
        return $ingredientsList;
    }


    function checkIngredientAmountType(string $amountType) : string {
        $link = "";
    
        if($amountType == "snufje") {
          $link = "https://www.elle.com/nl/eten/eten-drinken/a25008051/hoeveel-snufje-zout/";
    
        } else if($amountType == "kneepje") {
          $link = "https://www.youtube.com/watch?v=p7YXXieghto";
    
        } else if ($amountType == "theelepels") {
          $link = "https://www.voedingscentrum.nl/nl/gezonde-recepten/kookhulp/hoeveel-gram-milliliter-theelepel-eetlepel.aspx";
          
        } else if ($amountType == "eetlepels") {
          $link = "https://www.voedingscentrum.nl/nl/gezonde-recepten/kookhulp/hoeveel-gram-milliliter-theelepel-eetlepel.aspx";
        }
    
        if($link == "") {
          return $amountType;
    
        } else {
          return "<a class='dumb-ingredient-type' href='$link'>$amountType</a>";
        }
    }

}