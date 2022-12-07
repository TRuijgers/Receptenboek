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
                <section id="basic">
                    <div id="recipes">
                        <input type="text" name="title" placeholder="Naam" required>
                        <input type="text" name="origin" placeholder="Herkomst, bvb. 'Grieks'">
                        <select type="text" name="theme" size="4">
                            <option value="default">Standaard</option>
                            <option value="blue">Blauw</option>
                            <option value="red">Rood</option>
                            <option value="orange">Oranje</option>
                        </select>
                        <input type="checkbox" name="vegetarian">
                        <input type="checkbox" name="vegan">
                        <input type="checkbox" name="spicy">
                        <input type="text" name="serving tip" placeholder="Serveertip(s)">
                        <input type="number" name="quantity" required>
                        <select type="text" name="unit" required>
                            <option value="Personen">Personen</option>
                            <option value="Porties">Porties</option>
                        </select>
                    </div>
                    <div id="images">
                        <h3>Afbeeldingen</h3>
                        <input type="text" placeholder="Afbeelding">
                    </div>
                    <div id="background_info">
                        <h3>Achtergrondinformatie</h3>
                        <textarea placeholder="Infobox"></textarea>
                    </div>
                </section>
                <section id="lists">
                    <div id="ingredients">
                        <h3>Ingrediënten</h3>
                        <ul>
                            <li>
                                <input type="number" name="quantity">
                                <input type="text" name="unit" placeholder="Maateenheid">
                                <input type="text" name="name" placeholder="Naam ingrediënt" required>
                            </li>
                        </ul>
                    </div>
                    <div id="tools">
                        <h3>Hulpmiddelen</h3>
                        <ul>
                            <li>
                                <input type="text" name="name" placeholder="Naam hulpmiddel">
                            </li>
                        </ul>
                    </div>
                    <div id="preparation">
                        <h4>Bereiding stappen</h4>
                        <ol>
                            <li>
                                <input type="text" name="description" placeholder="Bereiding stap" required>
                            </li>
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