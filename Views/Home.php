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
    <script src="../Js/Pricing.js" defer></script>
    
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

    <section id="overOns" class="simple-flex-container introduction-block">
        <div class="description-block width-70 bigpadding switchable-block">
            <button class="button-29 posleft1" role="button">←</button>
            <h3 class="site-description-title">Over Ons!</h3>
            <p class="displayAll">Thuiskoks zijn onze helden, zo simpel is het. De keuken van Stijn en Joost is een community gebouwd door keukenexperts met recepten die eenvoudig zijn gemaakt voor een kok van elk niveau. Wij zijn een gemeenschap voor de koks die het weekend zullen wijden aan een perfecte boeuf bourguignon, maar ook houden van de eenvoud van een slowcooker-uitvoering. De bakkers die werken aan een show-stopping-cake met 9 lagen, maar net zo graag brownies in dozen doen voor een decadent doordeweeks dessert. De entertainers die gewoon een stevige snack willen, zonder tonnen vuile vaat aan het einde van de avond.
                Het belangrijkste is dat de keuken van Stijn en Joost thuiskoks verbindt met hun grootste inspiratiebronnen: andere thuiskoks. We zijn 's werelds toonaangevende digitale voedingsmerk en dat inspireert ons om al het mogelijke te doen om onze gemeenschap verbonden te houden. Thuiskoks verdienen niet minder!</p>
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
            <h3 class="site-description-title">Biologische ingrediënten.</h3>
            <p class="displayAll textColor">Biologisch voedsel is vers of verwerkt voedsel geproduceerd door biologische landbouwmethoden. Biologisch voedsel wordt verbouwd zonder het gebruik van synthetische chemicaliën, zoals door de mens gemaakte pesticiden en kunstmest, en bevat geen genetisch gemodificeerde organismen (GGO's). Biologisch voedsel omvat zowel verse producten, vlees en zuivelproducten als bewerkte voedingsmiddelen. De markt voor biologisch voedsel is sinds het einde van de 20e eeuw aanzienlijk gegroeid en is een miljardenindustrie geworden met verschillende productie-, verwerkings-, distributie- en retailsystemen.</p>
        </div>
    </section>

    <section id="geschiedenis" class="simple-flex-container introduction-block">
        <div class="description-block width-70 bigpadding switchable-block">
            <button class="button-29 posleft1" role="button">←</button>
            <h3 class="site-description-title">Geschiedenis.</h3>
            <p class="displayAll">Onze website is opgericht op 23 november 2022. Sindsdien is de community uitgegroeid tot meer dan twee mensen wereldwijd en blijven de plannen zich uitbreiden, dat is niet het einde van het verhaal... We hebben een passie voor en de expertise van koken en willen om het met mensen te delen, ongeacht waar ze vandaan komen of wat hun ervaring is, gewoon lekker eten voor iedereen.</p>
        </div>
        <div class="recipe-picture-video-fill width-30 switchable-block">
            <video class="video-side-descriptionblock" autoplay muted src="../Videos/Cooking Campfire Pizza on The Sadj Grill, The Best Pizza You'll Ever Eat.mp4" type="video/mp4"></video>
        </div>
    </section>
    

    <main class="page-content recipe-header-space">
    
        <section id="abonnementen" class="underline-h2 sectionMargin">
            <h2>Abonnementen!</h2>
            <span class=""></span>
        </section>


        <section class="simple-flex-container flex-gap set-height">

            <div class="product-container">
                <div>
                    <p><b>Home cook!</b></p>
                    <p>€14,99 p.p. per week</p>
                </div>

                <div class="space-around">
                    <ul>
                        <li>Toegang tot unieke <b>video tutorials</b>.</li>            
                        <li>Ingrediënten <b>direct</b> thuis geleverd, <b>Één</b> keer per week!</li>             
                    </ul>
                    
                    <div class="container-button-wrap btn-loc">
                        <div class="center-button-wrap">
                            <button class="btn-red btn-red-size1" id="chefs-special">
                            <svg width="150px" height="40px" viewBox="0 0 150 40" class="border">
                                    <polyline points="150,1 150,40 1,40 1,1 150,1" class="bg-line" />
                                    <polyline points="150,1 150,40 1,40 1,1 150,1" class="hl-line" />
                                </svg>
                                <span>Bestel Nu!</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="product-container product-container-popular">
                <div class="popular-tag">
                    <p class="star">★</p>
                    <p>Populair!</p>
                </div>
                <div>
                    <p><b>Medium-rare!</b></p>
                    <p>€29,99 p.p. per week</p>
                </div>

                <div class="space-around">
                    <ul class="li-invert">
                        <li><b>Home cook</b> package</li> <b></b>            
                        <li>Vraag onze <b>top chef's</b> om hulp!</li>              
                        <li>Ingrediënten <b>direct</b> thuis geleverd, <b>Drie</b> keer per week!</li>                     </ul>

                    <div class="container-button-wrap btn-loc">
                        <div class="center-button-wrap">
                            <button class="btn-red btn-red-size1" id="chefs-special">
                                <svg width="150px" height="40px" viewBox="0 0 150 40" class="border">
                                    <polyline points="150,1 150,40 1,40 1,1 150,1" class="bg-line" />
                                    <polyline points="150,1 150,40 1,40 1,1 150,1" class="hl-line" />
                                </svg>
                                <span>Bestel Nu!</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="product-container">
                <div>
                    <p><b>Chef's Special!</b></p>
                    <p>€59,99 p.p. a week</p>
                </div>

                <div class="space-around">
                    <ul>
                        <li><b>Medium-rare</b> package</li>           
                        <li><b>Discounts</b> on recipe ingredients</li>            
                        <li>Ingrediënten <b>direct</b> thuis geleverd,<b>Vijf </b> keer per week!</li>           
                    </ul>

                    <div class="container-button-wrap btn-loc">
                        <div class="center-button-wrap">
                            <button class="btn-red btn-red-size1" id="chefs-special">
                            <svg width="150px" height="40px" viewBox="0 0 150 40" class="border">
                                    <polyline points="150,1 150,40 1,40 1,1 150,1" class="bg-line" />
                                    <polyline points="150,1 150,40 1,40 1,1 150,1" class="hl-line" />
                                </svg>
                                <span>Bestel Nu!</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
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