<?php declare(strict_types=1);
require_once('./recipebook/recipebook.php');
require_once('./recipebook/connect.php');
require_once('./recipebook/content.php');

// $recipe = $mapper->fetchRecipe(1);
// $ingredients = $mapper->fetchJoinedData(1, 'ingredients');
// $preparation = $mapper->fetchJoinedData(1, 'preparation');
// $images = $mapper->fetchJoinedData(1, 'images');
$mapper = Connection::connectToDB();

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
                    <?php 
                        // $img1 = $images[0]['path'];
                        // $title = $recipe[0]['title'];
                        // echo 
                        // "<img src=\"$img1\" alt=\"\">
                        // <h2>$title</h2>"
                        Content::printImages(1, 1, $mapper);
                        Content::printRecipe(1, $mapper);
                    ?>
                </div>
                <span class="section-separator"></span>
            </div>
        </section>
        <section id="section2">
            <div>
                <div>
                    <?php 
                        // $img2 = $images[1]['path'];
                        // echo "<img src=\"$img2\" alt=\"\">"
                        Content::printImages(1, 2, $mapper);
                    ?>
                    <div>
                        <h3>Benodigdheden:</h3>
                        <ul>
                            <?php 
                                Content::printIngredients(1, $mapper);
                                // foreach ($ingredients as $key=>$value){
                                //     echo "<li>${value['name']}</li><span class='li-separator'></span>";
                                // }
                            ?>
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
                    <?php 
                        Content::printPreparationSteps(1, $mapper);
                        // foreach ($preparation as $key=>$value){
                        //     echo "<li>${value['description']}</li><span class='li-separator'></span>";
                        // }
                    ?>
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