<?php
require_once('./recipebook/recipebook.php');
require_once('./recipebook/connect.php');
require_once('./homepage/homepage.php');

$mapper = Connection::connectToDB();
$recipesArray = $mapper->fetchAllRecipes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptenboek</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

    <link href="./css/home/styles.css" rel="stylesheet">
    
    <script src="./scripts/main.js" defer></script>
</head>
<body>
    <header>
        <h1>Recepten</h1>
        <div>
            <div>Home</div>
            <div>Contact</div>
        </div>
    </header>
    <main>
        <div>
            <div>
                <h1>Welkom bij,<br> Receptenboek</h1>
            </div>
        </div>
        <div class="aboutUs">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ipsa. Delectus sint placeat optio quidem dolore error sapiente similique consectetur illo, qui quibusdam corrupti veniam architecto amet blanditiis totam alias, provident reprehenderit, ab quod eum. Autem, facere! Maxime, voluptatum voluptate voluptatem qui blanditiis aperiam fuga assumenda. Ea commodi quaerat, architecto ducimus maiores error quibusdam deleniti nihil dolorem consequatur reiciendis, laborum exercitationem est animi? Voluptates molestias officiis atque quisquam natus veniam suscipit? Ducimus iusto laborum totam.</p>
        </div>
        <ul>
            <form action="" method="post">
                <?php 
                foreach ($recipesArray as $key=>$value){
                    // change div class=chicken to img
                    echo "<li>
                        <button formaction='recipe.php?id=${value['id']}' type='submit' name=\"${value['id']}\" id=\"${value['id']}\">
                            <img class='chicken' src='https://www.recipetineats.com/wp-content/uploads/2020/10/General-Tsao-Chicken_1-SQ.jpg'>
                                <div class='centered'>
                                    General Tso's Chicken
                                </div>
                            </img>
                        </button>
                    </li>";
                }
                ?>
            </form>
        </ul>
    </main>
    <footer>
        <div>
            <div>Home</div>
            <div>Contact</div>
        </div>
    </footer>
    <?php 
    ?>
</body>

</html>