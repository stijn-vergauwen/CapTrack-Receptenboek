<?php
require_once("../Php/Main.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Base.css">
    <link rel="stylesheet" href="../Css/Recipe.css">
    <link rel="stylesheet" href="../Css/Footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <script src="../Js/Ingrediënts.js" defer></script>
    <title>Receptenboek</title>
</head>
<body>
    
    <?= $componentLoader->loadHeader() ?>

    <main class="page-content recipe-header-space">

        <?= $componentLoader->loadRecipeContent(validateRecipeRequest($_GET['id'])) ?>

        <section class="underline-h2 sectionMargin">
            

            <h2>bekijk ook!</h2>
            <span class=""></span>
        </section>


        <section class="recipe-grid-wrap sectionMargin">
    
            <?= $componentLoader->loadRecipeGrid() ?>

        </section>

    </main>


    <?= $componentLoader->loadFooter() ?>


    <!-- 
        header -> nav
        plaatje recept
        title korte beschrijving
        tijd moeilijkheidsgraat
        schrempje met ingredienten
        veranderbaar met hoeveel personen
        bereiding staps gewijs
        andere recepten terug laten komen
        footer
        nep linkjes
        teksten zwart
        achtergrond ff kleur
        buttons opvallende kleur (rood)
        hover effecten
        veel afbeeldingen!
     -->
</body>