<?php declare(strict_types=1);
require_once('./classes/connect.php');
require_once('./classes/content.php');
require_once('./classes/recipe_content.php');

$contentLoader = new Content(Connect::connectToDB());
$contentDistributor = $contentLoader->feedRecipePage();

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
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <link href="./css/recipe/styles.css" rel="stylesheet">
    
    <script src="./scripts/recipe.js" defer></script>
</head>


<body class=<?php $contentDistributor->printRecipeContent('theme') ?>>
    <?php include_once('./components/header.php'); ?>
    <main>
        <?php 
            for ($i=1; $i<=3; $i++) include_once("./components/section_${i}.php");
        ?>
    </main>
    <?php include_once('./components/footer.php'); ?>
</body>

</html>

<?php Connect::disconnectFromDB($contentLoader); ?>