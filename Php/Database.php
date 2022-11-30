<?php
class Database {
    private $connection;

    public function createConnection(string $dbName, string $user, string $password) {
        $dsn = 'mysql:host=localhost;dbname=' . $dbName;
        $this->connection = new PDO($dsn, $user, $password);
    }

    public function getAllRecipes() : array {
        $query = $this->connection->query('SELECT * FROM recipes');
        return $query->fetchAll();
    }

    public function getRecipe(int $id) : array {
        $query = $this->connection->query("SELECT * FROM recipes WHERE id = $id");
        return $query->fetch();
    }

    


}