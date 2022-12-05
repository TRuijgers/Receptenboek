<?php declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <link href="./css/contact/styles.css" rel="stylesheet">
    
    <script src="./scripts/main.js" defer></script>
</head>


<body>
    <?php include_once('./components/header.php'); ?>
    <main>
        <div class="container">
            <h1>Contact</h1>
            <div>
                <div>
                    <h2>Facebook:</h2>
                    <p>fakeFacebookName</p>
                </div>
                <a href="https://www.facebook.com/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/900px-Facebook_f_logo_%282019%29.svg.png">
                </a>
            </div>
            <div>
                <div>
                    <h2>Twitter:</h2>
                    <p>fakeTwitterName</p>
                </div>
                <a href="https://twitter.com/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Twitter-logo.svg/768px-Twitter-logo.svg.png?20220821125553">
                </a>
            </div>
            <div>
                <div>
                    <h2>E-mail:</h2>
                    <p>fakeMail@faking.fake</p>
                </div>
                <a href="https://www.google.com/intl/nl/gmail/about/">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Mail_%28iOS%29.svg/900px-Mail_%28iOS%29.svg.png?20141024222707">
                </a>
            </div>
        </div>
    </main>
    <?php include_once('./components/footer.php'); ?>
</body>

</html>