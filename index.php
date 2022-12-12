<?php declare(strict_types=1);
require_once('./classes/connect.php');
require_once('./classes/feedcontent.php');
require_once('./classes/homepage_content.php');

$contentLoader = new FeedContent(Connect::connectToDB("root", ""));
$contentDistributor = $contentLoader->feedHomePage();

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
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">


    <link href="./css/home/styles.css" rel="stylesheet" defer>
    
    <script src="./scripts/main.js" defer></script>
</head>
<body>
    <?php include_once('./components/header.php'); ?>
    <main>
        <div>
            <div>
                <h1>Welkom Itske, bij<br> MijnReceptenboek</h1>
            </div>
        </div>
        <div class="aboutUs">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ipsa. Delectus sint placeat optio quidem dolore error sapiente similique consectetur illo, qui quibusdam corrupti veniam architecto amet blanditiis totam alias, provident reprehenderit, ab quod eum. Autem, facere! Maxime, voluptatum voluptate voluptatem qui blanditiis aperiam fuga assumenda. Ea commodi quaerat, architecto ducimus maiores error quibusdam deleniti nihil dolorem consequatur reiciendis, laborum exercitationem est animi? Voluptates molestias officiis atque quisquam natus veniam suscipit? Ducimus iusto laborum totam.</p>
        </div>
        <ul>
            <form action="" method="post">
                <?php 
                    $contentDistributor->printAllRecipes();
                ?>
            </form>
        </ul>
    </main>
    <?php include_once('./components/footer.php'); ?>
</body>

</html>

<?php Connect::disconnectFromDB($contentLoader); ?>