<?php require("script.php") ?>
<!DOCTYPE HTML>  
<html>
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
<body>  

<?php
// define variables and set to empty values
$titre = $texte = $auteur  = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titre= test_input($_POST["titre"]);
  $texte = test_input($_POST["texte"]);
  $auteur = test_input($_POST["auteur"]);
  $date = test_input($_POST["date"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>

<h2>Ajouter un nouvel article</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<input type="hidden" name="id" value="<?php echo  $id=uniqid();?>" />
  Titre: <input type="text" name="titre">

  <br><br>
  Texte: <textarea name="texte" rows="5" cols="40"></textarea>
  <br><br>
  Auteur: <input type="text" name="auteur">
  <br><br>
  Date : 
  <label for="date">Date de publication:</label>
  <input type="date" id="date" name="date">
  <br><br>
  
  <input type="submit" name="submit" value="Publier">  
</form>

<?php
echo "<h2>Les informations de votre article</h2>";
echo $titre;
echo "<br>";
echo $texte;
echo "<br>";
echo $auteur;
echo "<br>";
echo $date;
echo "<br>";

?>

</body>
<footer>
<?php
include 'footer.php';
?>
</footer>
</html>