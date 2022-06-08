<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<header>
    <?php include_once("header.php"); ?>
</header>
<body>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pas encore inscrit ?</h5>
        <p class="card-text">cliquer sur le bouton pour vous inscrire</p>
        <a href="inscr" class="btn btn-primary">s'inscrire </a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Déjà inscrit ? </h5>
        <p class="card-text">cliquer sur le bouton pour vous connecter</p>
        <a href="connexion.php" class="btn btn-primary">Se connecter</a>
      </div>
    </div>
  </div>
</div>



</body>
<footer>
<?php
include 'footer.php';
?>
</footer>
</html>