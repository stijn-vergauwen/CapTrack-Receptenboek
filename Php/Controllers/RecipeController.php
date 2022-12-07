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
        );
    }
}
