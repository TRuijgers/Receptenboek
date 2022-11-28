<?php
require_once('./recipebook/recipebook.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recept</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,400;1,300&display=swap" rel="stylesheet"> 
    
    <link href="./css/recept/styles.css" rel="stylesheet">
    
    <script src="./scripts/main.js" defer></script>
</head>


<body>
    <header>
        <h1>Receptenboek</h1>
        <div>
            <div>Home</div>
            <div>Contact</div>
        </div>
    </header>
    <main>
        <section id="section1">
            <div>
                <div>
                    <h2>
                        <?php 
                        echo $rows[0]['title'];
                        ?>
                    </h2>
                </div>
                <span class="section-separator"></span>
            </div>
        </section>
        <section id="section2">
            <div>
                <div>
                    <img src="https://stripedspatula.com/wp-content/uploads/2019/01/general-tsos-chicken-7.jpg" alt="">
                    <div>
                        <h3>Benodigdheden:</h3>
                        <ul>                
                            <li>Kipfilet</li>
                            <span class="li-separator"></span>
                            <li>Maïzena</li>
                            <span class="li-separator"></span>
                            <li>Olie</li>
                            <span class="li-separator"></span>
                            <li>Sojasaus</li>
                            <span class="li-separator"></span>
                            <li>Rijstazijn</li>
                            <span class="li-separator"></span>
                            <li>Hoisinsaus</li>
                            <span class="li-separator"></span>
                            <li>Bruine suiker</li>
                            <span class="li-separator"></span>
                            <li>Kippen bouillon</li>
                            <span class="li-separator"></span>
                            <li>Gemberpasta</li>
                            <span class="li-separator"></span>
                            <li>Knoflook poeder</li>
                            <span class="li-separator"></span>
                            <li>Gedroogde of vermalen rode peper</li>
                            <span class="li-separator"></span>
                        </ul>
                    </div>
                </div>
                <span class="section-separator"></span>
            </div>
        </section>
        <section id="section3">
            <div>
                <div>
                    <h3>Bereidingswijze:</h3>
                    <ol>
                        <li>Klop 4 eetlepels sojasaus, 4 eetlepels rijstazijn, 4 eetlepels hoisinsaus, 4 eetlepels bruine suiker, 1 eetlepel gemberpasta en ¼ kopje kippenbouillon samen in een kom. Opzij zetten.</li>
                        <span class="li-separator"></span>
                        <li>Voeg ¼ kopje maizena toe aan een kleine kom. Gooi de stukjes kip in het maizena tot ze volledig bedekt zijn. Laat ze voorlopig in de kom.</li>
                        <span class="li-separator"></span>
                        <li>Zet je brander op middelhoog vuur. Verhit de olie die je gaat gebruiken om te bakken in een grote koekenpan. Bak een paar stukjes van de gepaneerde kip tegelijk. Als ze klaar zijn, zijn ze goudbruin, krokant en goed gaar. Zet opzij om uit te lekken.</li>
                        <span class="li-separator"></span>
                        <li>Als het laatste stuk kip klaar is, verwijder dan alles behalve ongeveer 1 eetlepel olie uit de pan.</li>
                        <span class="li-separator"></span>
                        <li>Giet de kom met de geklopte sausingrediënten in de pan en breng het aan de kook. Blijf de saus op dit vuur koken tot hij dikker wordt, af en toe roeren om aanbranden te voorkomen.</li>
                        <span class="li-separator"></span>
                        <li>Als de saus is ingedikt, doe je de stukjes kip terug in de pan. Gooi om de krokant gebakken kip grondig te coaten voor het serveren.</li>
                        <span class="li-separator"></span>
                        <li>Haal de pan van het vuur en giet de mix over rijst om te serveren. Garneer met gehakte groene uien of sesamzaadjes indien gewenst.</li>
                        <span class="li-separator"></span>
                    </ol>
                </div>
                <span class="section-separator"></span>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <div>Home</div>
            <div>Contact</div>
        </div>
    </footer>
</body>

</html>