<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $titre = $_POST['titre'];
     $texte = $_POST['texte'];
     $auteur = $_POST['auteur'];
     $date_publication = $_POST['date_publication'];
     $sql = "INSERT INTO articles (titre,texte,auteur,date_publication)
     VALUES ('$titre','$texte','$auteur','$date_publication')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>