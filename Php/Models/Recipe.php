<?php

class Recipe {
    public $id;
    public $title;
    public $description;
    public $created_timestamp;
    public $duration;
    public $difficulty;
    public $default_people_amount;
    public $thumbnail;
    public $ingredients;
    public $preparation_steps;

    public function SetIngredients(array $ingredients) {
        $this->ingredients = $ingredients;
    }

    public function SetPreparationSteps(array $preparationSteps) {
        $this->perparationSteps = $preparationSteps;
    }
}
