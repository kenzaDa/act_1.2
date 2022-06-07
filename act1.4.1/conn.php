<?php
include_once 'db.php';
try
{
    $db = new PDO('mysql:host=localhost;dbname=database;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
 
if ( isset($_POST['submit'])) {
    
    $sqlQuery = 'INSERT INTO articles(titre, texte, auteur, date_publication) VALUES (:titre, :texte, :auteur, :date_publication)';
    
    $insertArticle = $db->prepare($sqlQuery);
    
    $insertArticle->execute([
        'titre' => $_POST['titre'],
        'texte' => $_POST['text'],
        'auteur' => $_POST['auteur'],
        'date_publication' => $_POST['date_publication'], 
    ]);
}
    ?>