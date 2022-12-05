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
    <title>Recepten Home</title>

</head>

<body>

    <?= $componentLoader->loadHeader() ?>

    <main class="page-content">

        <section class="recipe-grid-wrap">
            
            <?= $componentLoader->loadRecipeGrid() ?>
            
        </section>
    </main>
    
    <?= $componentLoader->loadFooter() ?>
    
    
</body>
</html>