<?php
require_once("Database.php");
require_once("ComponentLoader.php");
require_once("Controllers/RecipeController.php");
require_once("Models/Recipe.php");

// setup classes
$pathToComponentsFolder = "../Views/Components/";

$database = new Database();
$database->createConnection("receptenboek", "root", "");

$componentLoader = new ComponentLoader($pathToComponentsFolder, $database, new Recipecontroller($database));

function validateRecipeRequest($request) : int {
    if(is_numeric($request)) {
        return (int)$request;
    }
    return 1; // eigenlijk wil ik terug naar vorige page ofzo gaan.
}


// DB Tables structuur:
// 
// Table "recipes":
//      "id" - int - id is gwn int
//      "title" - varchar(40) - max title lengte
//      "description" - text - dit kan een best lange text zijn
//      "duration" - varchar(20) - string is makkelijk, maar mag niet te lang zijn
//      "difficulty" - int
//      "default_people_amount" - int - duidelijke naam is wel fijn
//      "thumbnail" - varchar(100) - link naar img
// 
// Table "ingredients":
//      "id" - int - gwn int
//      "recipe_id" - int - recipe koppeling
//      "title" - varchar(40) - text niet te lang
//      "amount" - float - hoeveelheid, nodig voor verandering in hoeveelheid personen
// 
// Table "preparation_steps":
//      "id" - int - gwn int
//      "recipe_id" - int - recipe koppeling
//      "body" - text
//      "list_order" - int - hoeveelste stap het is