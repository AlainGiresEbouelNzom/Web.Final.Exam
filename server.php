<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style-accueil.css">

</head>

<body>

    <header>
        <div id="uqtr"> <a href="https://www.uqtr.ca/">UQTR</a></div>

        <button id="home1" class="btn">Accueil</button>
        <button onclick="window.location.href = 'inscription.php';" id="insc" class="btn">Inscription</button>
    </header>
    <input id="searchbar" onkeyup="search_activity()" type="text" name="search" placeholder="Filtrer...">


    <div class="animation-grid">
        <div class="animation-border"></div>
        <div><video height="400" src="/woman-traveler.mp4" controls autoplay loop></video></div>
        <div class="animation-border"></div>
    </div>



    <?php
    $message = file_get_contents('message.json');
    $message = json_decode($message, true);
    if (true)


    ?>


    <ol id='list'>
        <li class="activities" activity1 id="activity-1">
            <div class="active">
                <?php if (!isset($message[0])) {
                echo "empty";
            } ?>
            </div>

            <h2><?php if (isset($message[0])) echo $message[0]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"> <?php if (isset($message[0])) echo $message[0]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[0])) echo $message[0]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[0])) {
                        if ($message[0]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash1"><img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-2">
            <div class="active">
                <?php if (!isset($message[1])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[1])) echo $message[1]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[1])) echo $message[1]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[1])) echo $message[1]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[1])) {
                        if ($message[1]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash2"><img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-3">
            <div class="active">
                <?php if (!isset($message[2])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[2])) echo $message[2]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[2])) echo $message[2]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[2])) echo $message[2]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[2])) {
                        if ($message[2]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash3"><img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-4">
            <div class="active">
                <?php if (!isset($message[3])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[3])) echo $message[3]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[3])) echo $message[3]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[3])) echo $message[3]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[3])) {
                        if ($message[3]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash4"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-5">
            <div class="active">
                <?php if (!isset($message[4])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[4])) echo $message[4]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[4])) echo $message[4]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[4])) echo $message[4]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[4])) {
                        if ($message[4]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash5"><img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-6">
            <div class="active">
                <?php if (!isset($message[5])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[5])) echo $message[5]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[5])) echo $message[5]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[5])) echo $message[5]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[5])) {
                        if ($message[5]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash6"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-7">
            <div class="active">
                <?php if (!isset($message[6])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[6])) echo $message[6]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[6])) echo $message[6]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[6])) echo $message[6]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[6])) {
                        if ($message[6]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash7"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-8">
            <div class="active">
                <?php if (!isset($message[7])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[7])) echo $message[7]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[7])) echo $message[7]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[7])) echo $message[7]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[7])) {
                        if ($message[7]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash8"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-9">
            <div class="active">
                <?php if (!isset($message[8])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[8])) echo $message[8]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[8])) echo $message[8]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[8])) echo $message[8]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[8])) {
                        if ($message[8]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash9"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-10">
            <div class="active">
                <?php if (!isset($message[9])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[9])) echo $message[9]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[9])) echo $message[9]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[9])) echo $message[9]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[9])) {
                        if ($message[9]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash10"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-11">
            <div class="active">
                <?php if (!isset($message[10])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[10])) echo $message[10]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[10])) echo $message[10]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[10])) echo $message[10]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[10])) {
                        if ($message[10]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash11"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" activity1 id="activity-12">
            <div class="active">
                <?php if (!isset($message[11])) {
                    echo "empty";
                } ?>
            </div>

            <h2><?php if (isset($message[11])) echo $message[11]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"> <?php if (isset($message[11])) echo $message[11]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[11])) echo $message[11]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[11])) {
                        if ($message[11]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash12"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-13">
            <div class="active">
                <?php if (!isset($message[12])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[12])) echo $message[12]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[12])) echo $message[12]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[12])) echo $message[12]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[12])) {
                        if ($message[12]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash13"><img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-14">
            <div class="active">
                <?php if (!isset($message[13])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[13])) echo $message[13]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[13])) echo $message[13]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[13])) echo $message[13]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[13])) {
                        if ($message[13]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash14"><img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-15">
            <div class="active">
                <?php if (!isset($message[14])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[14])) echo $message[14]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[14])) echo $message[14]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[14])) echo $message[14]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[14])) {
                        if ($message[14]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash15"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-16">
            <div class="active">
                <?php if (!isset($message[15])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[15])) echo $message[15]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[15])) echo $message[15]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[15])) echo $message[15]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[15])) {
                        if ($message[15]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash16"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-17">
            <div class="active">
                <?php if (!isset($message[16])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[16])) echo $message[16]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[16])) echo $message[16]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[16])) echo $message[16]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[16])) {
                        if ($message[16]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash17"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-18">
            <div class="active">
                <?php if (!isset($message[17])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[17])) echo $message[17]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[17])) echo $message[17]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[17])) echo $message[17]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[17])) {
                        if ($message[17]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash18"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-19">
            <div class="active">
                <?php if (!isset($message[18])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[18])) echo $message[18]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[18])) echo $message[18]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[18])) echo $message[18]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[18])) {
                        if ($message[18]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash19"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

        <li class="activities" id="activity-20">
            <div class="active">
                <?php if (!isset($message[19])) {
                    echo "empty";
                } ?>
            </div>
            <h2><?php if (isset($message[19])) echo $message[19]['nom']; ?></h2>
            <div class="desc-adress">
                <b id="description"><?php if (isset($message[19])) echo $message[19]['description']; ?></b>
                <div><img height="140px" width="140px" src="<?php if (isset($message[19])) echo $message[19]['adresse']; ?>" alt="Image indisponible"></div>
            </div>
            <div class="play-pause-trash">
                <div id="play">
                    <?php if (isset($message[19])) {
                        if ($message[19]['statut'] == 'false')  echo '<img height="25px" src="./images/pause2.png" alt="">';
                        else echo '<img height="25px" src="./images/play.webp" alt="">';
                    } ?>
                </div>
                <button id="trash20"> <img height="25px" src="/images/trash.jpg" alt=""></button>
            </div>
        </li>

    </ol>

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