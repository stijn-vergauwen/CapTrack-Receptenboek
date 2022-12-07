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
    <link rel="stylesheet" href="../Css/Home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>Recepten Home</title>

</head>

<body>

    <?= $componentLoader->loadHeader() ?>

    <section class="no-height-width">
        <div class="home-page-intro-wrap">
            <div class="logo-homepage"></div>
            <div class="simple-flex-container-row">
                <span class="white-h1">Cr</span>
                <span class="red-h1">eat</span>
                <span class="white-h1">ive</span>
            </div>
            <h1 class="white-h1 h1-loc">Recipes</h1>
        </div>
    </section>

    <main class="page-content">




        <section class="recipe-grid-wrap">
            
            <?= $componentLoader->loadRecipeGrid() ?>
            
        </section>
    </main>
    
    <?= $componentLoader->loadFooter() ?>
    
    
</body>
</html>