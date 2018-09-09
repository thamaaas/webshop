 <?php
require_once "controller.php";
 
      $controll = new Controller();
    	$controll -> connect();
      $controll -> user();
      


      $userName = $_SESSION["userData"]["user_name"];
      $userPw = $_SESSION["userData"]["user_passwd"];
      $userMail = $_SESSION["userData"]["user_email"];
      $userReg = $_SESSION["userData"]["user_reg_date"];
      $userLastin = $_SESSION["userData"]["user_last_in"];
     
       /*
      foreach ($_SESSION["userData"] as $key => $value) {
        print_r($key); print_r($value); print_r("</ br>");
      }*/
     // print_c($userName);

?>

<?php/*
        require_once('PHPMailer/PHPMailerAutoload.php');

        $mail = new PHPMailer();
        $mail -> isSMTP();
        $mail -> SMTPAuth = true;
        $mail -> SMTPSecure = 'ssl';
        $mail -> Host = 'smtp.gmail.com';
        $mail -> Port = '456';
        $mail -> isHTML();
        $mail -> Username = 'brfktomi09@gmail.com';
        $mail -> Password = '19950211';
        $mail -> SetFrom('no-reply@zoldker.com');
        $mail -> Subject = 'tesztüzi';
        $mail -> Body = "Ez egy <br> teszt <b>üzenet</b> ";
        $mail -> AddAddress('brfkblabla@gmail.com');

        $mail -> Send();*/
    ?>

<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <title>Profil</title>
  </head>
  <body>
<?php
      require_once "controller.php";
      $controll = new Controller();
      $log =  $controll -> isLoggedIn;
      ?>

<div class="container">
      
        <div class="row">
          <div class="col-12">
            

            <div class="bannerContainer">
              

                    <nav class="navbar navbar-expand-lg navbar-light bg-light myNav">
                      
<?php
                              
                              if ($log == true) {
                                $loginAction = "logout.php";
                                $loginName  = "logout";
                                $loginValue = "Kijelentkezés";



                                echo '<a class="navbar-brand" href="index.php">Zöldker KFT</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            
                          <li class="nav-item"><a class="nav-link" href="index.php">Főoldal</a></li>
                          <li class="nav-item active"><a class="nav-link" href="shop.php">Vásárlás</a></li>

                          ';
                              }








                              else {
                                $loginAction = "login.php";
                                $loginName  = "login";
                                $loginValue = "Bejelentkezés";

                                echo '<a class="navbar-brand" href="#">Zöldker KFT</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            
                          
                          <li class="nav-item"><a class="nav-link" href="#contacts">Elérhetőségek</a></li>';
                          

                         

                              }
?>
                          
                          
                          <form method="post" action="<?= $loginAction ?>">
                          <input class="nav-log-bttn nav-item" type="submit" name="<?php echo $loginName ?>" value="<?php echo $loginValue?>">
                            </form>
                          </ul>
                        </div>
                  </nav>




            </div>



          </div>
          
        </div>


    </div>




    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3" style="background-color: red">
          <p>Felhasználónév: <label><?= $userName ?></label></p>
          <p>Emailcím: <label"><?= $userMail ?></label></p>
          <p>Regisztráció ideje: <label"><?= $userReg ?></label></p>
          <p>Utolsó bejelentkezés: <label"><?= $userLastin ?></label></p>
        </div>
        
      </div>
      
    </div>





</body>
</html>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>






    