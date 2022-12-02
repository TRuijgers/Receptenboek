<?php declare(strict_types=1);
require_once('./classes/connect.php');
require_once('./classes/content.php');

$contentLoader = new Content(Connection::connectToDB());

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
    <?php include_once('./components/header.php'); ?>
    <main>
        <?php 
            for ($i=1; $i<=3; $i++) include_once("./components/section_${i}.php");
        ?>
    </main>
    <?php include_once('./components/footer.php'); ?>
</body>

</html>

<?php Connection::disconnectFromDB($contentLoader); ?>