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
                    <div id="recipes"></div>
                    <div id="images"></div>
                    <div id="background_info"></div>
                </section>
                <section id="lists">
                    <div id="ingredients"></div>
                    <div id="tools"></div>
                    <div id="preparation"></div>
                </section>
                <div>
                    <p>Velden met een * zijn verplicht.</p>
                    <input type="submit">
                </div>
            </form>
        </article>
    </main>
    <?php include_once('./components/footer.php'); ?>
</body>

</html>