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
            <h1>
                <div class="simple-flex-container-row">
                    <span class="white-h1">Cr</span>
                    <span class="red-h1">eat</span>
                    <span class="white-h1">ive</span>
                </div>
                <span class="white-h1 h1-loc">Recipes</span>
            </h1>
        </div>
    </section>

    <section class="simple-flex-container">
        <div id="intro-description-block" class="description-block width-70">
            <button id="introduction-btn1" class="button-29 posleft1" role="button">←</button>
            <h3 class="site-description-title">website description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div id="intro-video-block1" class="recipe-picture-video-fill width-30">
            <video class="video-side-descriptionblock" autoplay muted src="../Videos/Chai Spice Cake1080p.mp4" type="video/mp4"></video>
        </div>
    </section>

    <section class="simple-flex-container">
        <div id="intro-video-block2" class="recipe-picture-video-fill width-30">
            <video class="video-side-descriptionblock" autoplay muted src="../Videos/What makes organic food organic720p.mp4" type="video/mp4"></video>
        </div>
        <div id="intro-organic-block" class="description-block width-70">
            <button id="introduction-btn2" class="button-29 posright1" role="button">→</button>
            <h3 class="site-description-title">Organic products</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </section>
    

    <main class="page-content">
    
        <section>

        </section>


        <section class="recipe-grid-wrap">
            
            <?= $componentLoader->loadRecipeGrid() ?>
            
        </section>
    </main>
    
    <?= $componentLoader->loadFooter() ?>
    
    
</body>
</html>