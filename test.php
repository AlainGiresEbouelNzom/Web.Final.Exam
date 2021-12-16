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
}
