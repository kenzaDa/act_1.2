<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Articles</title>
    <link rel="stylesheet" type="text/css" href="style.css" media=”screen” />
</head>
<body>

<?php 
include 'header.php';
?>
<?php 
include 'utils.php';
?>
<div class="article"> 
<h2>tous les articles sont :</h2>
<?php $articles=getArticles();?>
<?php foreach($articles as $article):?>
        <h2> Titre : <?php echo $article['titre'] ?></h2>
        <h4> Par :<?php echo $article['auteur'] ?></h4>
        <h6> Le : <?php echo  $article['date de publication'] ?></h6>
        <p><?php echo $article['texte'] ?></p>
        <?php endforeach ?>
       
        </div>

</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>