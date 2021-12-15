<?php 
try {
    $db = new PDO('mysql:host=localhost;dbname=server', 'root', ''); 
} catch ( PDOException $e) {
    die('Erreur: ' .$e->getMessage());
}
?>