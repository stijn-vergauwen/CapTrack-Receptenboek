<?php

class Recipe {
    public $id;
    public $title;
    public $description;
    public $createdTimestamp;
    public $duration;
    public $difficulty;
    public $defaultPeopleAmount;
    public $thumbnail;
    public $ingredients;
    public $preparationSteps;

    public function SetIngredients(array $ingredients) {
        $this->ingredients = $ingredients;
    }

    public function SetPreparationSteps(array $preparationSteps) {
        $this->perparationSteps = $preparationSteps;
    }
}
