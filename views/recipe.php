<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
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
            <!-- <div class="recipe-img"> -->
                <img src="../Img/chai-latte-cake.jpg" alt="Een lekkere latte cake">
            <!-- </div> -->
            <div class="recipe-description">
                <h1>Chai latte cake</h1>
                <p>Dit is de beschrijving van het recept</p>
            </div>
        </section>
    
        <section class="recipe-ingredients">
            <h2>Ingrediënten</h2>
    
            <div class="">
                <button>+</button>
                <p>Personen</p>
                <button>-</button>
            </div>

            <ul>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
                <li>ingrediënt</li>
            </ul>
        </section>
            
        <section class="recipe-steps">
            <h2>Bereidingswijze</h2>
    
            <ol class="">
                <li>Stap</li>
                <li>Stap</li>
                <li>Stap</li>
            </ol>
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
</html>