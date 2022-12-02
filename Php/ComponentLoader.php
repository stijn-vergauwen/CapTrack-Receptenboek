<?php

class ComponentLoader {
  private $pathToComponents;
//   private $navLinkContentArray = array("Home", "Cool Page!", "About", "Contact");

  public function __construct(string $pathToComponents) {
    $this->pathToComponents = $pathToComponents;
  }

  // Loading components to display in html

  public function loadHeader() : string {
    return $this->setComponentVariables(
      $this->getComponentFromFile("header.html"),
      array("{recipe1}", "{recipe2}", "{recipe3}", "{navLinks}"),
      // array("Test Title!", $this->generateNavContent())
      array("Chai latte cake", "Iets van lasagne", "Een ander recept", "")
    );
  }

  public function loadFooter() : string {

  }

  public function loadRecipeContent() : string {

  }

  public function loadRecipeGrid() : string {

  }

  // Generating content of sub-components

  function generateNavContent() : string {
    // - get navLinkContent
    // - loop through content array, for each:
    // - get component file
    // - replace the values
    // - add to result
    // - return result

    // $content = $this->navLinkContentArray
  }

  function generateRecipeIngredients() : string {
    $ingredientsList = "";
  }

  // Utility

  function getComponentFromFile(string $fileName) : string {
    return file_get_contents($this->pathToComponents . $fileName);
  }

  function setComponentVariables(string $component, array $keys, array $values) : string {
    return str_replace($keys, $values, $component);
  }
} 
