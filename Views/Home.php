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

    <script src="../Js/IntroductionSection.js" defer></script>

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

    <section class="simple-flex-container introduction-block">
        <div class="description-block width-70 bigpadding switchable-block">
            <button class="button-29 posleft1" role="button">←</button>
            <h3 class="site-description-title">About Us!</h3>
            <p class="displayAll">Home cooks are our heroes it's as simple as that. Stijn's and Joost's kitchen is a community built by kitchen experts with recipes made simple for a cook of every skill level: We are a community for the cooks who will dedicate the weekend to a perfect beef bourguignon but love the simplicity of a slow-cooker rendition, too. The bakers who labor over a showstopping 9-layer cake but will just as happily doctor boxed brownies for a decadent weeknight dessert. The entertainers who just want a solid snack spread, without tons of dirty dishes at the end of the night.
                Most importantly, Stijn's and Joost's kitchen connects home cooks with their greatest sources of inspiration — other home cooks. We're the world's leading digital food brand, and that inspires us to do everything possible to keep our community connected. Two ;) home cooks deserve no less.</p>
        </div>
        <div class="recipe-picture-video-fill width-30 switchable-block">
            <video class="video-side-descriptionblock" autoplay muted src="../Videos/Chai Spice Cake1080p.mp4" type="video/mp4"></video>
        </div>
    </section>

    <section class="simple-flex-container introduction-block">
        <div class="recipe-picture-video-fill width-30 switchable-block">
            <video class="video-side-descriptionblock" autoplay muted src="../Videos/What makes organic food organic720p.mp4" type="video/mp4"></video>
        </div>
        <div class="description-block1 width-70 bigpadding switchable-block">
            <button class="button-29 posright1" role="button">→</button>
            <h3 class="site-description-title">Organic Ingredients.</h3>
            <p class="displayAll textColor">organic food is fresh or processed food produced by organic farming methods. Organic food is grown without the use of synthetic chemicals, such as human-made pesticides and fertilizers, and does not contain genetically modified organisms (GMOs). Organic foods include fresh produce, meats, and dairy products as well as processed foods such as crackers, drinks, and frozen meals. The market for organic food has grown significantly since the late 20th century, becoming a multibillion dollar industry with distinct production, processing, distribution, and retail systems.</p>
        </div>
    </section>

    <section class="simple-flex-container introduction-block">
        <div class="description-block width-70 bigpadding switchable-block">
            <button class="button-29 posleft1" role="button">←</button>
            <h3 class="site-description-title">History.</h3>
            <p class="displayAll">Our Website was established in november, 23 2023. Since then it's community has grown to over 2 people worldwide and plans continue to extend, that is not the end of the story...We have a passion for and the expertise of cooking and want to share it with people, no matter where they're from or their experience, just good food for everyone.</p>
        </div>
        <div class="recipe-picture-video-fill width-30 switchable-block">
            <video class="video-side-descriptionblock" autoplay muted src="../Videos/Cooking Campfire Pizza on The Sadj Grill, The Best Pizza You'll Ever Eat.mp4" type="video/mp4"></video>
        </div>
    </section>
    

    <main class="page-content">
    
        <section class="underline-h2 sectionMargin">
            <h2>Laatste recepten!</h2>
            <span class=""></span>
        </section>


        <section class="recipe-grid-wrap sectionMargin">
            
            <?= $componentLoader->loadRecipeGrid() ?>
            
        </section>
    </main>
    
    <?= $componentLoader->loadFooter() ?>
    
    
</body>
</html>