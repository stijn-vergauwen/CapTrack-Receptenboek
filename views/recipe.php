<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/Recipe.css">

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
                        <p>Difficulty</p>
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
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
            </ul>
        </section>

        <section>
            <div class="page-span-Bereidingswijze">
                <h2>Bereiding</h2>
            </div>
        </section>
            
        <section class="recipe-steps">
    
            <ol class="recipe-steps-ol">
                <li>Start met het maken van de chai kruidenmix of gebruik een kant-en-klare versie.</li>
                <li>Verwarm de oven voor op 170° graden.</li>
                <li>Doe de (plantaardige) melk in een pannetje en voeg de chai kruidenmix, de vanille extract en wat honing toe.</li>
                <li>Roer dit goed door met een garde. Verhit dit op het vuur totdat deze warm is, laat hem niet koken. Zodra de melk warm is, voeg je het theezakje toe en laat circa 5 minuten trekken.</li>
                <li>Ga ondertussen verder met de cake: Mix de olie, eieren, (plantaardige) yoghurt, suiker en het snufje zout door elkaar. Voeg 60 ml van het chai latte mengsel toe en mix nog een keer goed door.</li>
                <li>Zeef het bakmeel en mix totdat het een glad mengsel is.</li>
                <li>Vet de bakvorm goed in met een beetje olie en/of bekleed met bakpapier.</li>
                <li>Giet het beslag in de vorm en zet ongeveer 60 minuten in de oven.</li>
                <li>Maak ondertussen de glazuurlaag. Neem 1 eetlepel/de rest van het chaimengsel en voeg daar al roerend met een garde beetje bij beetje de poedersuiker aan toe totdat je een dikke glazuur krijgt. Het moet nog net ‘lopen’ als je het met een lepel eruit schept.</li>
            </ol>
        </section>
    </main>

    <footer>

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
</html>