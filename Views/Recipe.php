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
    <title>Receptenboek</title>
</head>
<body>
    <header class="page-header">
        <p>Stijn's & Joost's Receptenboek</p>
        <nav class="header-nav">
            <a class="nav-link" href="/Views/home.php">Home</a>
            <a class="nav-link" href="/Views/recipe.php">Recepten</a>
        </nav>
    </header>
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
                            <img src="../Img/clock-icon.png" alt="clock icon">
                            <p class="Required-time-text">20 min + 1 uur oventijd</p>
                        </div>
                    </div>
                    <div class="difficulty-wrapper">
                        <p>Moeilijkheid</p>
                        <div class="difficulty-icon-div">
                            <img src="../Img/Baking-Icon.png" alt="Baking icon">
                            <img src="../Img/Baking-Icon.png" alt="Baking icon">
                            <img class="difficulty-icon-seethrough" src="../Img/Baking-Icon.png" alt="Baking icon">
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    
        <section>
            <div class="page-span-ingredients">
                <h2>Ingrediënten</h2>
            </div>
        </section>
        <section class="recipe-ingredients">
            <div class="total-person-container">
                <div class="container-button-wrap">
                    <div class="center-button-wrap">
                      <button class="btn-red">
                        <svg width="40px" height="30px" viewBox="0 0 40 30" class="border">
                          <polyline points="40,1 40,30 1,30 1,1 40,1" class="bg-line" />
                          <polyline points="40,1 40,30 1,30 1,1 40,1" class="hl-line" />
                        </svg>
                        <span>+</span>
                      </button>
                    </div>
                </div>

                <p>Personen</p>

                <div class="container-button-wrap">
                    <div class="center-button-wrap">
                      <button class="btn-red">
                        <svg width="40px" height="30px" viewBox="0 0 40 30" class="border">
                          <polyline points="40,1 40,30 1,30 1,1 40,1" class="bg-line" />
                          <polyline points="40,1 40,30 1,30 1,1 40,1" class="hl-line" />
                        </svg>
                        <span>-</span>
                      </button>
                    </div>
                  </div>
            </div>

            <ul class="styling-ul">
                <li>0.3 eetlepels chai kruiden</li>
                <li>15 ml neutrale olijfolie</li>
                <li>28 gr witte basterdsuiker</li>
                <li>25 gr Griekse yoghurt (plantaardig)</li>
                <li>32 gr zelfrijzend bakmeel</li>
                <li>0.1 theelepels vanille extract</li>
                <li>0.2 eieren</li>
                <li>snufje zout</li>
                <li>6 ml (plantaardige) melk</li>
                <li>0.1 zakje zwarte thee</li>
                <li>0.1 kneepje honing</li>
                <li>16 gr poedersuiker</li>
                <li>0.1 eetlepel (plantaardige) melk</li>
            </ul>
        </section>
        <section>
            <div class="page-span-Bereidingswijze">
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
        </section>

        <section class="recipe-grid-wrap">
            <img class="grid-obj-styling" src="../Img/chai-latte-cake.jpg" alt="">
            <img class="grid-obj-styling" src="../Img/Recept-placeholder1.jpg" alt="">
            <img class="grid-obj-styling" src="../Img/chai-latte-cake.jpg" alt="">
            <img class="grid-obj-styling" src="../Img/chai-latte-cake.jpg" alt="">
            <img class="grid-obj-styling" src="../Img/chai-latte-cake.jpg" alt="">
            <img class="grid-obj-styling" src="../Img/chai-latte-cake.jpg" alt="">
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