
<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <title>Belépés</title>
  </head>
  <body>

  	<div class="container">
  		<div class="row justify-content-md-center">
  			<div class="loginFormContainer">
  				<div class="container">
  					<div class="row">
  						<div class="col-12">

<?php
 $errormessage = "";
 ?>


  							<form action="" method="post">
  								<h3 align="center">Zöldker KFT bejelentkezés</h3>
  								<input type="text" name="username" placeholder="felhasználónév">
  								<input type="password" name="passwd" placeholder="jelszó">
  								<input type="submit" name="login" value="Belépés">

  							<div class="container"><div class="row"><div class="col-12"><?php echo $errormessage;  ?></div></div></div>
                <p><a href="aszf.html">Felhasználási feltételek</a></p>



  							</form>
  						</div>
  					</div>
  				</div>
  			</div>

  		</div>
  	</div>

</body>
</html>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>














<?php
 $errormessage = "";
if(isset($_POST["login"]))
{
  if (!empty($_POST["username"]) && !empty($_POST["passwd"])){
      require_once "controller.php";
      $controll = new Controller();
    	$controll -> login();
    }
}





