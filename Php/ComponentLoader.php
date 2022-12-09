<?php

class ComponentLoader {
  private $pathToComponents;
  private $database;
  private $recipeController;
  private $ingredientController;

  public function __construct(
    string $pathToComponents,
    Database $database,
    RecipeController $recipeController,
    IngredientController $ingredientController
  ) {
    $this->pathToComponents = $pathToComponents;
    $this->database = $database;
    $this->recipeController = $recipeController;
    $this->ingredientController = $ingredientController;
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
    return $this->recipeController->loadRecipeContent($recipeId, $this);
  }

  public function loadRecipeGrid() : string {
    return $this->recipeController->loadRecipeGrid($this);
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

  function getRecipeIngredients(int $recipeId) {
    return $this->ingredientController->generateRecipeIngredients($recipeId, $this);
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
