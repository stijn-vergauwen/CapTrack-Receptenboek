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
    // loop zodat je 6 items krijgt vor de recipegrid
    // maak een recipe id variable aan
    // haal de recipeid op uit de data base die het laast zijn aan gemaakt
    // vergelijk het recipeid uit de database met het recipeid variable
    // maak een array met alles wat vervangen moet worden
    // plaats de html in het grid element
    $latestRecipes = $this->database->getLatestRecipes();

  foreach($latestRecipes as $singleRecipe) {
    
    $loadRecipeGrid = $this->setComponentVariables(
      $this->getComponentFromFile("RecipeGridItem.html"),
      array("{recipePage}", 
            "{recipeTitle}", 
            "{recipeThumbnail}", 
            "{recipeDescription}", 
            "{difficultySelect}", 
            "{requiredRecipeTime}"
      ), 
      array("../Views/Recipe.php?id=" . $singleRecipe["id"], 
            $singleRecipe["title"], 
            $singleRecipe["thumbnail"], 
            $singleRecipe["description"], 
            $singleRecipe["difficulty"], 
            $singleRecipe["duration"]
      )
    );

        
  }

  return $loadRecipeGrid;

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
