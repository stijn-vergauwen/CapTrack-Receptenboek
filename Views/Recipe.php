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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <script src="../Js/Ingrediënts.js" defer></script>
    <title>Receptenboek</title>
</head>
<body>
    
    <?= $componentLoader->loadHeader() ?>

    <main class="page-content">

        <?= $componentLoader->loadRecipeContent(1) ?>

        <section class="underline-h2">
            

            <h2>bekijk ook!</h2>
            <span class=""></span>
        </section>


        <section class="recipe-grid-wrap">
    
            <!-- Recipe 1 -->
            <div class="recipe-grid-container-flex" onclick="location.href='../Views/Recipe.php';">
                <div class="recipe-grid-container">
                    <img class="grid-obj-styling" src="../Img/chai-latte-cake.jpg" alt="">
                    <div class="recipe-grid-overlay">
                        <div class="recipe-overlay-text">Je favoriete herfstspecerijen verwerkt in een luchtige cake. Lekker met een chai latte drankje erbij.</div>
                        <div class="info-overlay-div">
                            <div class="flex-icons">
                                <p>moeilijkheid:</p>
                                <div class="difficulty-icon-div">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img class="difficulty-icon-seethrough" src="../Img/Baking-Icon1.png" alt="Baking icon">
                                </div>
                            </div>

                            <div class="flex-icons">
                                <p>tijd:</p>
                                <div class="time-icon-div" >
                                    <img src="../Img/clock-icon1.jpg" alt="clock icon">
                                    <p class="Required-time-text">1 uur 20 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="recipe-grid-name">Chai latte cake</p>
            </div>

            <!-- Recipe 2 -->
            <div class="recipe-grid-container-flex" onclick="location.href='../Views/Recipe.php';">
                <div class="recipe-grid-container">
                    <img class="grid-obj-styling" src="../Img/stamppot-met-spruitjes.jpg" alt="">
                    <div class="recipe-grid-overlay">
                        <div class="recipe-overlay-text">Met dit lekkere recept voor spruitjesstamppot, spek en appel lust iedereen spruitjes.</div>
                        <div class="info-overlay-div">
                            <div class="flex-icons">
                                <p>moeilijkheid:</p>
                                <div class="difficulty-icon-div">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img class="difficulty-icon-seethrough" src="../Img/Baking-Icon1.png" alt="Baking icon">
                                </div>
                            </div>

                            <div class="flex-icons">
                                <p>tijd:</p>
                                <div class="time-icon-div" >
                                    <img src="../Img/clock-icon1.jpg" alt="clock icon">
                                    <p class="Required-time-text">30 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="recipe-grid-name">spruitjesstamppot</p>
            </div>

            <!-- Recipe 3 -->
            <div class="recipe-grid-container-flex" onclick="location.href='../Views/Recipe.php';">
                <div class="recipe-grid-container">
                    <img class="grid-obj-styling" src="../Img/wraps-met-kip_b-1.jpg" alt="">
                    <div class="recipe-grid-overlay">
                        <div class="recipe-overlay-text">Lekkere tortilla wraps gevuld met Mexicaans gekruide kip en paprika, snel en makkelijk klaar!</div>
                        <div class="info-overlay-div">
                            <div class="flex-icons">
                                <p>moeilijkheid:</p>
                                <div class="difficulty-icon-div">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img class="difficulty-icon-seethrough" src="../Img/Baking-Icon1.png" alt="Baking icon">
                                </div>
                            </div>

                            <div class="flex-icons">
                                <p>tijd:</p>
                                <div class="time-icon-div" >
                                    <img src="../Img/clock-icon1.jpg" alt="clock icon">
                                    <p class="Required-time-text">25 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="recipe-grid-name">Wraps met kip</p>
            </div>

            <!-- Recipe 4 -->
            <div class="recipe-grid-container-flex" onclick="location.href='../Views/Recipe.php';">
                <div class="recipe-grid-container">
                    <img class="grid-obj-styling" src="../Img/lasagne-bolognese.jpg" alt="">
                    <div class="recipe-grid-overlay">
                        <div class="recipe-overlay-text">Het traditionele recept voor lasagne bolognese met een kruidige gehaktsaus en een romige bechamelsaus.</div>
                        <div class="info-overlay-div">
                            <div class="flex-icons">
                                <p>moeilijkheid:</p>
                                <div class="difficulty-icon-div">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img class="difficulty-icon-seethrough" src="../Img/Baking-Icon1.png" alt="Baking icon">
                                </div>
                            </div>

                            <div class="flex-icons">
                                <p>tijd:</p>
                                <div class="time-icon-div" >
                                    <img src="../Img/clock-icon1.jpg" alt="clock icon">
                                    <p class="Required-time-text">1 uur 25 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="recipe-grid-name">lasagne bolognese</p>
            </div>

            <!-- Recipe 5 -->
            <div class="recipe-grid-container-flex" onclick="location.href='../Views/Recipe.php';">
                <div class="recipe-grid-container">
                    <img class="grid-obj-styling" src="../Img/placeholder2.jpg" alt="">
                    <div class="recipe-grid-overlay">
                        <div class="recipe-overlay-text">Dit snelle basisrecept voor verse tomatensoep staat binnen 20 minuten op tafel en lukt gegarandeerd.</div>
                        <div class="info-overlay-div">
                            <div class="flex-icons">
                                <p>moeilijkheid:</p>
                                <div class="difficulty-icon-div">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img class="difficulty-icon-seethrough" src="../Img/Baking-Icon1.png" alt="Baking icon">
                                </div>
                            </div>

                            <div class="flex-icons">
                                <p>tijd:</p>
                                <div class="time-icon-div" >
                                    <img src="../Img/clock-icon1.jpg" alt="clock icon">
                                    <p class="Required-time-text">20 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="recipe-grid-name">verse tomatensoep</p>
            </div>

            <!-- Recipe 6 -->
            <div class="recipe-grid-container-flex" onclick="location.href='../Views/Recipe.php';">
                <div class="recipe-grid-container">
                    <img class="grid-obj-styling" src="../Img/placeholder6.jpg" alt="">
                    <div class="recipe-grid-overlay">
                        <div class="recipe-overlay-text">Snel en makkelijk een heerlijk pastagerecht op tafel met zalm en spinazie in een romige saus, echt een perfecte combinatie!</div>
                        <div class="info-overlay-div">
                            <div class="flex-icons">
                                <p>moeilijkheid:</p>
                                <div class="difficulty-icon-div">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                                    <img class="difficulty-icon-seethrough" src="../Img/Baking-Icon1.png" alt="Baking icon">
                                </div>
                            </div>

                            <div class="flex-icons">
                                <p>tijd:</p>
                                <div class="time-icon-div" >
                                    <img src="../Img/clock-icon1.jpg" alt="clock icon">
                                    <p class="Required-time-text">30 min</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="recipe-grid-name">Pasta met zalm en spinazie</p>
            </div>

        </section>

    </main>




<footer class="page-footer">
        <div class="footer-row">
            <a href="">media link</a>
            <a href="">media link</a>
            <a href="">media link</a>
        </div>
        <div class="footer-row">
            <a href="">page link</a>
            <a href="">page link</a>
            <a href="">page link</a>
        </div>
        <p>Copyright</p>
    </footer>
    <!-- 
        header -> nav
        plaatje recept
        title korte beschrijving
        tijd moeilijkheidsgraat
        schrempje met ingredienten
        veranderbaar met hoeveel personen
        bereiding staps gewijs
        andere recepten terug laten komen
        foote
        nep linkjes
        teksten zwart
        achtergrond ff kleur
        buttons opvallende kleur (rood)
        hover effecten
        veel afbeeldingen!
     -->
</body>