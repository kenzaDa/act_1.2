<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <?php include_once("header.php"); ?>
</header>
<?php include_once("utils.php"); ?>
<div class="article"> 
<h2>Les 3 derniers acticles sont :</h2>
<?php $articles=getArticles(3);?>
<?php foreach($articles as $article):?>
     <h2> Titre : <?php echo $article['titre'] ?></h2>
        <h2> Par :<?php echo $article['auteur'] ?></h2>
        <h2> Le <?php echo $article['date_publication'] ?></h2>
        <h2><?php echo $article['texte'] ?></h2>
        <?php endforeach ?>
        </div>

<footer>
<?php
include 'footer.php';
?>
</footer>
</html>