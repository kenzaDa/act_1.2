<?php require("ajoutComm.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Articles</title>
    <link rel="stylesheet" type="text/css" href="style.css" media=”screen” />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
        <h2> Par :<?php echo $article['auteur'] ?></h2>
        <h2> Le : <?php echo  $article['date_publication'] ?></h2>
        <h2><?php echo $article['texte'] ?></h2>
        <a  class="btn btn-danger" href="delete.php?id=<?php echo $article['id']?>">Supprimer</a>

        <h3>Ajouter un commentaire</h3>

<form method="POST" action="">  



  Commentaire: <textarea name="commentaires" rows="5" cols="40"></textarea>
  <br><br>
  Visiteur: <input type="text" name="visiteur">
  <br><br>
  Date : 
  <label for="date_publication">Date du commentaire:</label>
  <input type="date" id="date_comm" name="date_comm">
  <br><br>
  
  <input type="submit" name="comm" value="enregistrer commentaire">  
</form>
        <?php endforeach ?>
       
        </div>
        <?php
// define variables and set to empty values
$commentaires = $visiteur  = $date_comm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $commentaires = test_input($_POST["commentaires"]);
  $visiteur = test_input($_POST["visiteur"]);
  $date_comm = $_POST["date_comm"];

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>
</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>
</html>