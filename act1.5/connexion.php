<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<header>
    <?php include_once("header.php"); ?>
</header>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              
               <h4 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">déjà inscrit ?</h4>
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Se connecter</p>

                <form class="mx-1 mx-md-4" action="conn.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="nom" class="form-control" />
                      <label class="form-label" for="form3Example1c"> Votre nom</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" class="form-control" />
                      <label class="form-label" for="form3Example3c"> Votre Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="mdp" class="form-control" />
                      <label class="form-label" for="form3Example4c">Mot de passe</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <!-- <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repter mot de passe</label>
                    </div> -->
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                   <input class="form-check-input me-2" type="checkbox" value="" name="checkbox" /> 
                  <label class="form-check-label" for="form2Example3"> 
                   Retenir mon identifiant  
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="enrg"class="btn btn-primary btn-lg"href="index.php">Enregistrer</button>
                    
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img 
                  class="img-fluid" src='https://phoenixpuneripattern.com/phoenix/asset/img/icon/signup.jpg'>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 

</body>
</html>