<?php
class Database {
    private $connection;

    public function createConnection(string $dbName, string $user, string $password) {
        $dsn = 'mysql:host=localhost;dbname=' . $dbName;
        $this->connection = new PDO($dsn, $user, $password);
    }

    public function query(string $query) {
        $stm = $this->connection->query($query);
        return $stm->fetchAll();
    }

    public function queryToClass(string $query, string $className) {
        $stm = $this->connection->query($query);
        return $stm->fetchAll(PDO::FETCH_CLASS, $className);
    }

    public function getAllRecipes() : array {
        $query = $this->connection->query('SELECT * FROM recipes');
        return $query->fetchAll();
    }

    public function getRecipe(int $id) : array {
        $query = $this->connection->query("SELECT * FROM recipes WHERE id = $id");
        return $query->fetch();
    }

    public function getIngredientsFromRecipe(int $id) : array {
        $query = $this->connection->query(
            "SELECT * FROM recipes_ingredients
            RIGHT JOIN ingredients
            ON ingredients.id = recipes_ingredients.ingredient_id
            WHERE recipes_ingredients.recipe_id = $id"
        );
        return $query->fetchAll();
    }

    

    public function getPreparationStepsFromRecipe(int $id) : array {
        $query = $this->connection->query(
            "SELECT * FROM preparation_steps
            Where recipe_id = $id
            ORDER BY list_order ASC"
        );
        return $query->fetchAll();
    }


    public function getLatestRecipes() : array {
        $query = $this->connection->query(
            "SELECT * FROM `recipes`
            ORDER BY added DESC
            LIMIT 6"
        );
        return $query->fetchall();


    }

}