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
      array($this->generateNavContent())
    );
  }

  public function loadFooter() : string {
    return $this->getComponentFromFile("Footer.html");
  }

  public function loadRecipeContent() : string {

  }

  public function loadRecipeGrid() : string {

  }

  // Generating content of sub-components

  function generateNavContent() : string {
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

  function generateRecipeIngredients() : string {
    $ingredientsList = "";
    // $recipes = $database->getAllRecipes();
    // foreach($recipes as $recipe) {
    //   print_r($recipe);
    // }
  }

  // Utility

  function getComponentFromFile(string $fileName) : string {
    return file_get_contents($this->pathToComponents . $fileName);
  }

  function setComponentVariables(string $component, array $keys, array $values) : string {
    return str_replace($keys, $values, $component);
  }
} 
