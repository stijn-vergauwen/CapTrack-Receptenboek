<?php

class ComponentLoader {
  private $pathToComponents;
  private $database;

  public function __construct(string $pathToComponents, Database $database) {
    $this->pathToComponents = $pathToComponents;
    $this->database = $database;
  }

  // Loading components to display in html

  public function loadHeader() : string {
    return $this->setComponentVariables(
      $this->getComponentFromFile("Header.html"),
      array("{recipes}"),
      array($this->generateHeaderNavContent())
    );
  }

  public function loadFooter() : string {
    return $this->getComponentFromFile("Footer.html");
  }

  public function loadRecipeContent(int $recipeId) : string {
    $recipeData = $this->database->getRecipe($recipeId);
    return $this->setComponentVariables(
      $this->getComponentFromFile("RecipeContent.html"),
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
        $recipeData["thumbnail"],
        $recipeData["title"],
        $recipeData["description"],
        $recipeData["duration"],
        $this->generateRecipeDifficulty((int)$recipeData["difficulty"]),
        $recipeData["default_people_amount"],
        $this->generateRecipeIngredients($recipeId),
        $this->generateRecipeSteps($recipeId)
      )
    );
  }

  public function loadRecipeGrid() : string {
    $latestRecipes = $this->database->getLatestRecipes();
    $loadRecipeGrid = '';

    foreach($latestRecipes as $singleRecipe) {
      
      $loadRecipeGrid .= $this->setComponentVariables(
        $this->getComponentFromFile("RecipeGridItem.html"),
        array(
          "{recipePage}", 
          "{recipeTitle}", 
          "{recipeThumbnail}", 
          "{recipeDescription}", 
          "{difficultySelect}", 
          "{requiredRecipeTime}"
        ), 
        array(
          "../Views/Recipe.php?id=" . $singleRecipe["id"], 
          $singleRecipe["title"], 
          $singleRecipe["thumbnail"], 
          $singleRecipe["description"], 
          $this->generateRecipeDifficulty((int)$singleRecipe["difficulty"]), 
          $singleRecipe["duration"]
        )
      );
          
    }

    $missingRecipeCount = 6 - count($latestRecipes);
    
      for ($i = 0; $i < $missingRecipeCount; $i++) {

        $loadRecipeGrid .= $this->getComponentFromFile("RecipePlaceholder.html");
      };

    return $loadRecipeGrid;

  }

  // Generating content of sub-components

  function generateHeaderNavContent() : string {
    $navContent = "";

    $recipes = $this->database->getAllRecipes();
    foreach($recipes as $recipe) {
      $navContent .= $this->setComponentVariables(
        $this->getComponentFromFile("RecipeLink.html"),
        array("{link}", "{text}"),
        array("../Views/Recipe.php?id=" . $recipe["id"], $recipe["title"])
      );
    }

    return $navContent;
  }

  function generateRecipeDifficulty(int $difficulty) : string {
    $difficultyDisplay = "";

    for($i = 0; $i < 3; $i++) {
      $className = $i < $difficulty ? "" : "class='difficulty-icon-seethrough'";
      $difficultyDisplay .= $this->setComponentVariables(
        $this->getComponentFromFile("DifficultySelect.html"),
        array("{class}"),
        array($className)
      );
    }

    return $difficultyDisplay;
  }

  function generateRecipeSteps(int $recipeId) : string {
    $stepsList = "";

    $steps = $this->database->getPreparationStepsFromRecipe($recipeId);
    foreach($steps as $step) {
      $stepsList .= $this->setComponentVariables(
        $this->getComponentFromFile("RecipeStepItem.html"),
        array("{listOrder}", "{body}"),
        array($step["list_order"], $step["body"])
      );
    }

    return $stepsList;
  }

  // Utility

  function getComponentFromFile(string $fileName) : string {
    return file_get_contents($this->pathToComponents . $fileName);
  }

  function setComponentVariables(string $component, array $keys, array $values) : string {
    return str_replace($keys, $values, $component);
  }
} 
