<?php
include ('db.php');
function login($email,$mdp){
    global $db;
 
    $sqlQuery = 'SELECT * FROM users WHERE email = :email';
    $user = $db->prepare($sqlQuery);
    $user->execute([
        'email' => $email
    ]);
    $user = $user->fetchAll();
 
    if(!isset($user[0])){
        echo '<div class="alert alert-primary" role="alert">
        Bad credentials !
      </div>';
    }else{
        if(password_verify($mdp, $user[0]['mdp'])){
            $_SESSION['logged_user'] = $user[0]['email'];
            header('location:accueil.php');
        }else{
            echo '<div class="alert alert-primary" role="alert">
            Bad credentials !
          </div>';
        }
    }
}

    if (isset($_POST['email']) && isset($_POST['mdp'])) {
      login($_POST['email'],$_POST['mdp']);
    }
?>


<?php
  // if(isset($_POST['enrg'])){
  //     header("location:index.php");
  //     die();
  //  }
?>
