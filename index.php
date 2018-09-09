<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <title>Főoldal</title>
  </head>
  <body>



    
      <?php
      
      require_once "controller.php";
      $controll = new Controller();
      $log =  $controll -> isLoggedIn;

      ?>




    <div class="adminStuffContainer">
    	<input type="button" value="bezár" onclick="exit(0)">
    	<h1>Ez lesz a raktár manipuláció</h1>
    </div>
    <div class="adminStuffContainer">
    	<input type="button" value="bezár" onclick="exit(1)">
    	<h1>Ez lesz a felhasználómenedzs</h1>
    </div>
    <div class="adminStuffContainer">
    	<input type="button" value="bezár" onclick="exit(2)">
    	<h1>Ez lesz a statisztika</h1>
    </div>
    <div class="adminStuffContainer">
    	<input type="button" value="bezár" onclick="exit(3)">
    	<h1>Ez lesz a üznetek</h1>
    </div>
    <div class="adminStuffContainer">
    	<input type="button" value="bezár" onclick="exit(4)">
    	<h1>Ez lesz a rendelések</h1>
    </div>



                          








  	<div class="container">
  		
  			<div class="row">
  				<div class="col-12">
  					

  					<div class="bannerContainer">
  										<div id="adminMenu">
  											<input class="nav-log-bttn" onclick="adminStuff(0)" type="button" name="" value="Raktár manipuláció">
  											<input class="nav-log-bttn" onclick="adminStuff(1)" type="button" name="" value="Felasználó menedzsment">
  											<input class="nav-log-bttn" onclick="adminStuff(2)" type="button" name="" value="Statisztika">
  											<input class="nav-log-bttn" onclick="adminStuff(3)" type="button" name="" value="Üzenetek">
  											<input class="nav-log-bttn" onclick="adminStuff(4)" type="button" name="" value="Rendelések">
  										</div>




  									<nav class="navbar navbar-expand-lg navbar-light bg-light myNav">
  										
<?php
                              print_c($_SESSION);
                              if ($log == true) {
                                $loginAction = "logout.php";
                                $loginName  = "logout";
                                $loginValue = "Kijelentkezés";
                                		if ($_SESSION["user_permission"]==1) {
                                			$adminSv = "<input class='nav-log-bttn nav-item' type='button'  onclick='showIt()' value='Admin' style='padding-top:0px'>";
                                		}
                                		else
                                		{$adminSv="";}



                                echo '<a class="navbar-brand" href="index.php">Zöldker KFT</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                          '.$adminSv.'
                          
                          <li class="nav-item active"><a class="nav-link" href="shop.php">Vásárlás</a></li>

                          <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>';
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
  		<h3 align="center">Fontosnak tartjuk, hogy tudd</h3>
       		<div class="row justify-content-md-center">
            
              <div class="col-md-8">
                <blockquote class="blockquote">
                  <p class="mb-0">Hetente kétszer (kedden és pénteken) nyári szezonban háromszor (hétfőn, szerdán és pénteken) kapunk friss árut. </p>
                  <footer class="blockquote-footer">mi csak friss áruval dolgozunk</footer>
                </blockquote>
                <blockquote class="blockquote text-right">
                  <p class="mb-0">A tulaj maga választja ki az árut, mégpedig kivétel nélkül!</p>
                  <footer class="blockquote-footer">fontos a minőség</footer>
                </blockquote>


                </div>
            
          </div>


  	</div>



<div class="container">
  <div class="row">
    <div class="col-12">
      <!--
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/galery_item.jpg" alt="First slide">
                        <div class=" d-md-block">
                          <h5>Demo kép 1</h5>
                          <p>Folyamatos felirat a képhez</p>
                        </div>
                  </div> 
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/galery_item.jpg" alt="Second slide">
                        <div class="myHover d-md-block">
                          <h5>Második kép</h5>
                          <p>Húzd ide a kurzort</p>
                          <p>ha az kell, hogy csak így látszódjon</p>
                        </div>



                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/galery_item.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Harmadik kép</h5>
                          <p>Persze szöveg nélkül is működik</p>
                        </div>
                  </div>
                </div>
              </div>  -->



                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="img/galery_item.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="img/galery_item.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="img/galery_item.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="img/galery_item.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="img/galery_item.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="img/galery_item.jpg" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>














    </div>
  </div>
</div>









  	<div class="container">
  		<h3 align="center">Ezeket kapod tőlünk</h3>
  		<div class="row">
  			<div class="col-12">
  				<ul class="flex-pic-container">
  					<li class="flexItem">
  						<div class="container">
  								<div class="row">
  									<div class="col-12">
  										<i class="fas fa-check-circle "></i>
  									</div>
  			
  								</div>
  								<div class="row">
  									<div class="col-12 felxItemText">
  										Minőség
  									</div>
  			
  								</div>
  						</div>
  					</li>

  					<li class="flexItem">
  						<div class="container">
  								<div class="row">
  									<div class="col-12">
  										<i class="fas fa-truck"></i>
  									</div>
  			
  								</div>
  								<div class="row">
  									<div class="col-12 felxItemText">
  										Ingyenes házhozszállítás
  									</div>
  			
  								</div>
  						</div>
  					</li>


  					<li class="flexItem">
  						<div class="container">
  								<div class="row">
  									<div class="col-12">
  										<i class="fas fa-smile "></i>
  									</div>
  			
  								</div>
  								<div class="row">
  									<div class="col-12 felxItemText">
  										Kedvesség
  									</div>
  			
  								</div>
  						</div>
  					</li>

  				</ul>
  			</div>
  			
  		</div>
  		
  	</div>


  	<div class="container">
  	<div class="col-12 bg-light">
				<h3 align="center">Minket keresel? Itt vagyunk. :)</h3>
				<div id="googleMap" style="width:100%;height:200px;"></div>

			</div>
			</div>
  

  <div class="container myFooterCont" id="contacts">
    <div class="row justify-content-md-center">
      <div class="col-12 myFooter">
        <p align="center">
         Telefonszám: 06-00/123-45-67<br />
         Email: gipszjakab@fuhuhu.com<br />
         Fax: használ még valaki ilyet?<br />
         Telephely: 8623 Balatonföldvár, Valamilyen utca 89<br />
        </p>
        
      </div>
    </div>
  </div>
    
  </body>
</html>




	<script>
function myMap() { //46.846952, 17.879088
	var location ={lat: 46.846952, lng: 17.879088};
	var map = new google.maps.Map(document.getElementById("googleMap"),
	{
		zoom: 16,
		center: location
	});
	var marker = new google.maps.Marker({
		position: location,
		map: map
	});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUssVmLMeMqlpk3XuQZtM87Mzg7fb-fwg&callback=myMap"></script>





	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>




<script type="text/javascript">
	adminsv = 1;
	function showIt(){
		
		switch(adminsv){
			case 1:
				document.getElementById("adminMenu").style.display="block";
				adminsv = 0;
				break;
			case 0:
				document.getElementById("adminMenu").style.display="none";
				adminsv = 1;
				break;
		}
	}



	function exit(e){
		document.getElementsByClassName("adminStuffContainer")[e].style.display = "none";
	}
	function adminStuff(e){
		document.getElementsByClassName("adminStuffContainer")[e].style.display = "block";
	}
</script>

   