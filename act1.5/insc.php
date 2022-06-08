<?php 
include_once 'db.php'; ?> 
<?php
if ( isset($_POST['inscri'])) {
    
    $sqlQuery = 'INSERT INTO USERS(nom, mdp, email) VALUES (:nom, :mdp, :email)';
    
    $inscripuser = $db->prepare($sqlQuery);
    $hashed_password=password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $inscripuser->execute([
        'nom' => $_POST['nom'],
        'mdp' => $hashed_password,
        'email' => $_POST['email'], 
    ]);
}
    ?>
    <?php
  if(isset($_POST['inscri'])){
      header("location:index.php");
      die();
   }
?>
<!-- $insertUser= $db->prepare($sqlQuery);
    $hashed_password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $insertUser->execute([
        'Name' => $_POST['name'],
        'Age' => $_POST['age'],
        'Gender' => $_POST['country'],
        'Country' => $_POST['gender'],
        'Email' => $_POST['email'],
        'Password' => $hashed_password,
        ]); -->