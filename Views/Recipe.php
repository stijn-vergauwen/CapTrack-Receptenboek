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
        <section class="recipe-header">
            <img src="../Img/chai-latte-cake.jpg" alt="Een lekkere latte cake">
            <div class="recipe-description">
                <h1>Chai latte cake</h1>
                <p>Je favoriete herfstspecerijen verwerkt in een luchtige cake. Lekker met een chai latte drankje erbij.</p>
                
                <div class="info-icon-wrapper">
                    <div class="difficulty-wrapper" >
                        <p>tijd</p>
                        <div class="time-icon-div" >
                            <img src="../Img/clock-icon1.jpg" alt="clock icon">
                            <p class="Required-time-text">1 uur 20 min</p>
                        </div>
                    </div>
                    <div class="difficulty-wrapper">
                        <p>Moeilijkheid</p>
                        <div class="difficulty-icon-div">
                            <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                            <img src="../Img/Baking-Icon1.png" alt="Baking icon">
                            <img class="difficulty-icon-seethrough" src="../Img/Baking-Icon1.png" alt="Baking icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="page-span-ingredients">
            <div>
                <h2>Ingrediënten</h2>
            </div>
        </section>

        <section class="recipe-ingredients">

            <div class="total-person-container">
                <div class="container-button-wrap">
                    <div class="center-button-wrap">
                      <button class="btn-red" id="reducePersonAmount">
                        <svg width="40px" height="30px" viewBox="0 0 40 30" class="border">
                          <polyline points="40,1 40,30 1,30 1,1 40,1" class="bg-line" />
                          <polyline points="40,1 40,30 1,30 1,1 40,1" class="hl-line" />
                        </svg>
                        <span>-</span>
                      </button>
                    </div>
                </div>

                <p id="personAmount">500</p>
                <p>Personen</p>

                <div class="container-button-wrap">
                    <div class="center-button-wrap">
                      <button class="btn-red" id="addPersonAmount">
                        <svg width="40px" height="30px" viewBox="0 0 40 30" class="border">
                          <polyline points="40,1 40,30 1,30 1,1 40,1" class="bg-line" />
                          <polyline points="40,1 40,30 1,30 1,1 40,1" class="hl-line" />
                        </svg>
                        <span>+</span>
                      </button>
                    </div>
                </div>
            </div>

            <ul class="styling-ul">
                <li><p class="ingredient-amount">0.3</p><p> eetlepels chai kruiden</p></li>
                <li><p class="ingredient-amount">15</p><p> neutrale olijfolie</p></li>
                <li><p class="ingredient-amount">28</p><p> witte basterdsuiker</p></li>
                <li><p class="ingredient-amount">25</p><p> Griekse yoghurt (plantaardig)</p></li>
                <li><p class="ingredient-amount">32</p><p> zelfrijzend bakmeel</p></li>
                <li><p class="ingredient-amount">0.1</p><p> theelepels vanille extract</p></li>
                <li><p class="ingredient-amount">0.2</p><p> eieren</p></li>
                <li><p>snufje zout</p></li>
                <li><p class="ingredient-amount">6</p><p> (plantaardige) melk</p></li>
                <li><p class="ingredient-amount">0.1</p><p> zakje zwarte thee</p></li>
                <li><p class="ingredient-amount">0.1</p><p> kneepje honing</p></li>
                <li><p class="ingredient-amount">16</p><p> poedersuiker</p></li>
                <li><p class="ingredient-amount">0.1</p><p> eetlepel (plantaardige) melk</p></li>
            </ul>
        </section>

        <section class="page-span-Bereidingswijze">
            <div>
                <h2>Bereiding</h2>
            </div>
        </section>
            
        <section class="recipe-steps">
    
            <ol class="recipe-steps-ol">
                <div class="li-flex"><span class="li-styling-numeric">1.</span><li class="steps-li">Start met het maken van de chai kruidenmix of gebruik een kant-en-klare versie.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">2.</span><li class="steps-li">Verwarm de oven voor op 170° graden.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">3.</span><li class="steps-li">Doe de (plantaardige) melk in een pannetje en voeg de chai kruidenmix, de vanille extract en wat honing toe.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">4.</span><li class="steps-li">Roer dit goed door met een garde. Verhit dit op het vuur totdat deze warm is, laat hem niet koken. Zodra de melk warm is, voeg je het theezakje toe en laat circa 5 minuten trekken.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">5.</span><li class="steps-li">Ga ondertussen verder met de cake: Mix de olie, eieren, (plantaardige) yoghurt, suiker en het snufje zout door elkaar. Voeg 60 ml van het chai latte mengsel toe en mix nog een keer goed door.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">6.</span><li class="steps-li">Zeef het bakmeel en mix totdat het een glad mengsel is.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">7.</span><li class="steps-li">Vet de bakvorm goed in met een beetje olie en/of bekleed met bakpapier.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">8.</span><li class="steps-li">Giet het beslag in de vorm en zet ongeveer 60 minuten in de oven.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">9.</span><li class="steps-li">Maak ondertussen de glazuurlaag. Neem 1 eetlepel/de rest van het chaimengsel en voeg daar al roerend met een garde beetje bij beetje de poedersuiker aan toe totdat je een dikke glazuur krijgt. Het moet nog net ‘lopen’ als je het met een lepel eruit schept.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">10.</span><li class="steps-li">Controleer met een sateprikker of de cake gaar is. Laat de cake daarna afkoelen en haal uit de vorm.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">11.</span><li class="steps-li">Giet de topping over de cake heen en bestrooi eventueel nog met wat extra chaikruidenmix of andere specerijen.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">12.</span><li class="steps-li">Tips: Voeg 1 of 2 verse steranijs toe aan de warme melk als dit niet in je chaikruidenmix verwerkt zit.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">13.</span><li class="steps-li">Voeg eventueel nog wat walnoten toe aan het beslag voor een lekkere crunch.</li></div>
                <div class="li-flex"><span class="li-styling-numeric">14.</span><li class="steps-li">Maak er ook eens een heerlijke chai tea latte of kurkuma latte bij.</li></div>
            </ol>
            <p class="recipe-steps-p">Eet smakelijk!</p>

            <!-- review -->
            <p class="rating-text">Review recipe!</p>
            <div class="rating rating2">
                <a href="#5" title="Give 5 stars">★</a>
                <a href="#4" title="Give 4 stars">★</a>
                <a href="#3" title="Give 3 stars">★</a>
                <a href="#2" title="Give 2 stars">★</a>
                <a href="#1" title="Give 1 star">★</a>
            </div>

        </section>

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