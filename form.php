<?php declare(strict_types=1);

// if($loggedIn == false){
//   header("HTTP/1.0 404 Not Found");
// } else{
//   //some other code
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EigenRecept</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <link href="./css/form/styles.css" rel="stylesheet">
    
    <script src="./scripts/main.js" defer></script>
</head>



<body>
    <?php include_once('./components/header.php'); ?>
    <main>
        <article>
            <form action="">
                <div><h2>Invoegformulier</h2></div>
                <h3>Basis info</h3>
                <section id="basic">
                    <div id="recipes">
                        <label for="title">Titel<span class="required">&ast;</span></label>
                        <input type="text" name="title" placeholder="Naam" required>
                        <label for="origin">Herkomst</label>
                        <input type="text" name="origin" placeholder="Herkomst, bvb. 'Grieks'">
                        <label for="theme">Thema</label>
                        <select type="text" name="theme" size="4">
                            <option value="default" selected="selected">Standaard</option>
                            <option value="blue">Blauw</option>
                            <option value="red">Rood</option>
                            <option value="orange">Oranje</option>
                        </select>
                        <div>
                            <label for="vegetarian">Vegetarisch</label>
                            <input type="checkbox" name="vegetarian">
                            <label for="vegan">Vegan</label>
                            <input type="checkbox" name="vegan">
                            <label for="spicy">Spicy</label>
                            <input type="checkbox" name="spicy">
                        </div>
                        <label for="serving tip">Serveertip</label>
                        <textarea name="serving tip" placeholder="Serveertip(s)"></textarea>
                        <div>
                            <label for="quantity">Aantal<span class="required">&ast;</span></label>
                            <input type="number" name="quantity" required>
                            <select type="text" name="unit" size="2" required>
                                <option value="Personen" selected="selected">Personen</option>
                                <option value="Porties">Porties</option>
                            </select>
                        </div>

                    </div>
                    <div id="images">
                        <label for="afbeelding">Afbeeldingen (Maximaal 3)</label>
                        <input type="text" name="afbeelding" placeholder="Afbeelding #1">
                        <input type="text" name="afbeelding" placeholder="Afbeelding #2">
                        <input type="text" name="afbeelding" placeholder="Afbeelding #3">
                    </div>
                    <div id="background-info">
                        <label for="background info">Achtergrondinfo (Maximaal 2)</label>
                        <textarea name="background info" placeholder="Infobox #1"></textarea>
                        <textarea name="background info" placeholder="Infobox #2"></textarea>
                    </div>
                </section>
                <section id="lists">
                    <div id="ingredients">
                        <h3>Ingrediënten (Minimaal 1)<span class="required">&ast;</span></h3>
                        <ul>
                            <label for="quantity">Hoeveelheid</label>
                            <label for="unit">Maateenheid</label>
                            <label for="name">Naam</label>
                            <li>
                                <input type="number" name="quantity">
                                <input type="text" name="unit">
                                <input type="text" name="name" placeholder="Naam ingrediënt" required>
                            </li>
                            <div class="button-container">
                                <button class="plus" type="button">&plus;</button>
                                <button class="minus" type="button">&minus;</button>
                            </div>
                        </ul>
                    </div>
                    <div id="tools">
                        <h3>Hulpmiddelen</h3>
                        <ul>
                            <li>
                                <input type="text" name="name" placeholder="Naam hulpmiddel">
                            </li>
                            <div class="button-container">
                                <button class="plus" type="button">&plus;</button>
                                <button class="minus" type="button">&minus;</button>
                            </div>
                        </ul>
                    </div>
                    <div id="preparation">
                        <h3>Bereiding stappen (Minimaal 1)<span class="required">&ast;</span></h3>
                        <ol>
                            <li>
                                <textarea name="description" placeholder="Bereiding stap" required></textarea>
                            </li>
                            <div class="button-container">
                                <button class="plus" type="button">&plus;</button>
                                <button class="minus" type="button">&minus;</button>
                            </div>
                        </ol>
                    </div>
                </section>
                <div>
                    <p>Velden met een * zijn verplicht.</p>
                    <input type="submit" value="Verzenden">
                </div>
            </form>
        </article>
    </main>
    <?php include_once('./components/footer.php'); ?>
</body>

</html>