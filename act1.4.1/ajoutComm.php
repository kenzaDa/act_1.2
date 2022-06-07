<?php
include_once 'db.php';
if(isset($_POST['comm']))
{    
     $commentaires = $_POST['commentaires'];
     $visiteur = $_POST['visiteur'];
     $date_comm = $_POST['date_comm'];
     $sql = "INSERT INTO commentaire (commentaires,visiteur,date_comm)
     VALUES ('$commentaires','$visiteur','$date_comm')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>