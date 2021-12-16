<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet_final</title>
    <link rel="stylesheet" href="style-accueil.css">

</head>

<body>

    <header>
        <div> <a href="https://www.uqtr.ca/">UQTR</a></div>

        <button id="home1" class="btn">Accueil</button>
        <button id="insc" class="btn">Inscription</button>
    </header>
    <div class="animation-grid">
        <div class="animation-border"></div>
        <div><video height="400" src="/woman-traveler.mp4" controls autoplay loop></video></div>
        <div class="animation-border"></div>
    </div>
    <div class="activity">

    </div>

    <?php
    $message = file_get_contents('message.json');
    $message = json_decode($message, true);

    for ($i = 0; $i < count($message); $i++) :

    ?>

        <div class="activities">
            <h2><?php echo $message[$i]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php echo $message[$i]['description']; ?></b>
                <div><img height="140px" src="<?php echo $message[$i]['adresse']; ?>" alt=""></div>
            </div>
            <div class="play-pause-trash">
                <div id="play"><img height="25px" src="./images/play.webp" alt=""></div>
                <div id="pause"><img height="25px" src="./images/pause2.png" alt=""></div>
                <button id="trash"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>

        </div>

    <?php endfor ?>

    <footer>
        <div>
            <span>Restons en contact</span>

            <p>Contactez-nous</p>
        </div>
        <div>
            <span>À PROPOS</span>
            <p>Qui sommes-nous</p>
            <p>Politique de confidentialité</p>

        </div>
    </footer>
    <script src="anim.js"></script>
</body>



</html>