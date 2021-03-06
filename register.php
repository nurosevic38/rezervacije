<?php

    include("init.php");
    $msg = '';
    $msg_class = '';


    if(isset($_POST['register'])) {
    		require('userClass.php');
        $user = new User($mysqli);
    		$user->registracijaKorisnika(trim($_POST['name']),trim($_POST['username']),trim($_POST['password']),trim($_POST['telefon']));
        if($user->getResult()){
          $msg="Uspesno registrovan korisnik!";
          $msg_class = "alert-success";
        }else{
          $msg="Neuspesna registracija korisnika!";
          $msg_class = "alert-danger";
        }
     }
 ?>

<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />

<title>Najpovoljniji letovi</title>
<!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="assets/css/ionicons.css" rel="stylesheet" />
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<link href="assets/css/animations.min.css" rel="stylesheet" />
<link href="assets/css/style-solid-black.css" rel="stylesheet" />
<link rel="shortcut icon" href="avion.png">
</head>
<body data-spy="scroll" data-target="#menu-section">

<div class="navbar-inverse  scroll-me" id="menu-section" >
<?php include("meni.php") ?>
</div>

<!-- Glavna sekcija -->

    <div class="container text-center">
      <br>
            <h3>Registracija</h3>
            <hr />
            <?php
              if($msg != ''): ?>
                  <div class="alert <?php echo $msg_class ?>" role="alert">
                  <?php echo $msg?>
                  
                  </div>
              <?php endif;?>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="services-wrapper">
              <form name="registracija" method="post" action="">
                  <div class="form-group">
                      <label for="name" >Ime i prezime</label>                       
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Ime i prezime"/>
                    </div>

                    <div class="form-group">
                      <label for="username" >Korisnicko ime</label>
                            <input type="text" class="form-control" name="username" id="username"  placeholder="Korisnicko ime"/>
                    </div>

                    <div class="form-group">
                      <label for="password" >Lozinka</label>                     
                            <input id="password" type="password" class="form-control" name="password" id="password"  placeholder="Lozinka"/>
                    </div>
                    
                    
                    
                    <div class="form-group">
                      <label for="telephone" >Broj telefona</label>                       
                            <input type="text" class="form-control" name="telefon" id="telefon"  placeholder="Broj telefona"/>                        
                    </div>
                    <br>
                    <div class="form-group ">
                      <input type="submit" name="register" class="btn btn-danger btn-lg " value="Registruj se">
                    </div>
                  </form>

            </div>
        </div>
      </div>






<script src="assets/js/jquery-1.11.1.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/vegas/jquery.vegas.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/source/jquery.fancybox.js"></script>
<script src="assets/js/jquery.isotope.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.min.js"></script>
<script src="assets/js/custom-solid.js"></script>
<script>

</script>
</body>

</html>
