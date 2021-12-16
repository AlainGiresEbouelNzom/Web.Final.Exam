<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style-inscription.css">
</head>

<body>
    <header>
        <div> <a href="https://www.uqtr.ca/">UQTR</a></div>

        <button id="home" class="btn">Accueil</button>
        <button id="registration" class="btn">Inscription</button>
    </header>


    <div class="form-style-5">
        <form action="inscription.php" method="post">
            <fieldset>
                <legend><span class="number">*</span> Inscription</legend>
                <input type="text" name="field1" id="name" placeholder="Saisir le nom de l'activité">
                <textarea name="field2" id="description" placeholder="Saisir la description"></textarea>
                <input type="text" name="field3" id="image-adress" placeholder="Saisir l'adresse de l'image">
                <label for="job">Etat de l'activité</label>
                <select id="activity-statut" name="field4">
                    <optgroup id="statut" label="Statut">
                        <option value="true">En cours</option>
                        <option value="false">En attente</option>
                    </optgroup>
                </select>
            </fieldset>


            <button id="send" value="Envoyer">Envoyer</button>
            <button id="cancel">Annuler</button>

        </form>
    </div>
    <div class="activity"></div>
    <div>
        <?php
        if (isset($_POST['field1'])) {
            $message =  array();

            $message['nom'] = $_POST['field1'];

            $message['description'] = $_POST['field2'];

            $message['adresse'] = $_POST['field3'];

            $message['statut'] = $_POST['field4'];

            $js = file_get_contents('message.json');

            $js = json_decode($js, true);

            $js[] = $message;

            $js = json_encode($js);

            file_put_contents('message.json', $js);
        } ?>
    </div>

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