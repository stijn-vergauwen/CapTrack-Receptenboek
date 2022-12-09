<?php
class RecipeController {
    private $database;
    
    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getAllRecipes() : array {
        return $this->database->queryToClass("SELECT * FROM recipes", "Recipe");
    }

    public function getRecipeById(int $id) : Recipe {
        return $this->database->queryToClass("SELECT * FROM recipes Where id = $id", "Recipe")[0];
    }

    public function getLatestRecipes(int $limit) : array {
        return $this->database->queryToClass(
            "SELECT * FROM `recipes`
            ORDER BY added DESC
            LIMIT $limit"
            , "Recipe"
        );
    }

    // html loading

    public function loadRecipeContent(int $recipeId, ComponentLoader $componentLoader) : string {
        $recipeData = $this->getRecipeById($recipeId);
        return $componentLoader->setComponentVariables(
            $componentLoader->getComponentFromFile("RecipeContent.html"),
            array(
                "{recipeImageLink}",
                "{recipeTitle}",
                "{recipeDescription}",
                "{requiredRecipeTime}",
                "{difficultySelect}",
                "{defaultPeopleAmount}",
                "{recipeIngredients}",
                "{recipeSteps}"
            ),
            array(
                $recipeData->thumbnail,
                $recipeData->title,
                $recipeData->description,
                $recipeData->duration,
                $this->generateRecipeDifficulty((int)$recipeData->difficulty, $componentLoader),
                $recipeData->default_people_amount,
                $componentLoader->getRecipeIngredients($recipeId),
                $componentLoader->generateRecipeSteps($recipeId)
            )
        );
    }

    public function loadRecipeGrid(ComponentLoader $componentLoader) : string {
        $latestRecipes = $this->getLatestRecipes(6);
        $loadRecipeGrid = '';
    
        foreach($latestRecipes as $singleRecipe) {
          
            $loadRecipeGrid .= $componentLoader->setComponentVariables(
                $componentLoader->getComponentFromFile("RecipeGridItem.html"),
                array(
                    "{recipePage}", 
                    "{recipeTitle}", 
                    "{recipeThumbnail}", 
                    "{recipeDescription}", 
                    "{difficultySelect}", 
                    "{requiredRecipeTime}"
                ), 
                array(
                    "../Views/Recipe.php?id=" . $singleRecipe->id, 
                    $singleRecipe->title, 
                    $singleRecipe->thumbnail, 
                    $singleRecipe->description, 
                    $this->generateRecipeDifficulty((int)$singleRecipe->difficulty, $componentLoader), 
                    $singleRecipe->duration
                )
            );
              
        }
    
        $missingRecipeCount = 6 - count($latestRecipes);
        
        for ($i = 0; $i < $missingRecipeCount; $i++) {
    
            $loadRecipeGrid .= $componentLoader->getComponentFromFile("RecipePlaceholder.html");
        };
    
        return $loadRecipeGrid;
    
    }

    function generateRecipeDifficulty(int $difficulty, ComponentLoader $componentLoader) : string {
        $difficultyDisplay = "";
    
        for($i = 0; $i < 3; $i++) {
            $className = $i < $difficulty ? "" : "class='difficulty-icon-seethrough'";
            $difficultyDisplay .= $componentLoader->setComponentVariables(
                $componentLoader->getComponentFromFile("DifficultySelect.html"),
                array("{class}"),
                array($className)
            );
        }
    
        return $difficultyDisplay;
      }
}
