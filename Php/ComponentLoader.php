<?php

class ComponentLoader {
  private $pathToComponents;
  private $database;
  private $recipeController;

  public function __construct(string $pathToComponents, Database $database, RecipeController $recipeController) {
    $this->pathToComponents = $pathToComponents;
    $this->database = $database;
    $this->recipeController = $recipeController;
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
