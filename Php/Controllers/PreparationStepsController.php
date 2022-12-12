<?php

class PreparationStepsController {
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    function generateRecipeSteps(int $recipeId) : string {
        $stepsList = "";

        $steps = $this->database->getPreparationStepsFromRecipe($recipeId);
        foreach($steps as $step) {
        $stepsList .= $this->setComponentVariables(
            $this->getComponentFromFile("RecipeStepItem.html"),
            array("{listOrder}", "{body}"),
            array($step["list_order"], $step["body"])
        );
        }

        return $stepsList;
    }
}