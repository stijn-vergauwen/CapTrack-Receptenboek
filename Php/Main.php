<?php
require_once("Database.php");


$database = new Database();
$database->createConnection("receptenboek", "root", "");

$testRecipe = $database->getRecipe(1);
// print_r($testRecipe["title"]);




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