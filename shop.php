







      <?php
      require_once "controller.php";
      $controll = new Controller();
      $log =  $controll -> isLoggedIn;









/*


    --------------!!!!!   MINDENFÉLE A SHOPHOZ    !!!!!!!!!!---------------------------
    EGYSÉGEK
            1 -> kg
            2 -> db
            3 -> rekesz   10es
            4 -> láda     30as
            5 -> zsák
    OSZTÁLYOK
            d, c, b, a ,aa, aaa
          szar -----------> tuti   |nyilvánvalóan..
















*/











      ?>






<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<!--<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){

            $.get("search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);

            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>-->
<script type="text/javascript">
  
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"search.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search.length > 2)
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});

</script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="menu.css">











    <style type="text/css">
      .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
    </style>




    <title>Shop</title>
  </head>
  <body>
  		<div class="container">
      
        <div class="row">
          <div class="col-12">
            

            <div class="bannerContainer">
              

                    <nav class="navbar navbar-expand-lg navbar-light bg-light myNav">
                      
<?php
                              print_c($_SESSION);
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
      <div class="row">
        <div class="col-md-6 offset-md-3" >
                                
                                 <div class="form-group">
                                  <div class="input-group">
                                   <input type="text" name="search_text" id="search_text" placeholder="Keresés" class="form-control" />
                                  </div>
                                 </div>
                                 <br />
                                 
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-around" id="result"></div>
    </div>

<!--



         ----   Result item shit    ---------               
    <div class="container">
      <div class="row d-flex justify-content-around">
                

                <div class="card" style="width: 18rem;" onclick="itemOn(this)">
                <img class="card-img-top" src="https://www.deliveri.hu/image/cache/data/termekek/alapveto/srepa-900x900.jpg">
                <div class="card-body">
                  <h5 class="card-title">sárgarépa</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  
                </div>
              </div>
-->
<div id="selectedItemHolder" style="display: none"> <!--
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3" id="selectedItem">
        <div class="row">
          <div class="col-md-6">Itt lesz a kép</div>
            <div class="col-md-6">
                <div class="col-12">Név</div>
                <div class="col-6">Szárm hely</div>
                <div class="col-6">Osztály</div>
                <div class="col-5">Egységár</div>
                <div class="col-7">Rendelni kívánt mennyiség</div>
                <div class="col-12"><input type="button" onclick="itemOff()" Value="Mégse"><input type="button" Value="Kosárba"></div>
            </div>
        </div>
      </div>
    </div>
  </div>-->
</div>


<script type="text/javascript">
  function itemOn(x){
    document.getElementById("selectedItemHolder").style.display="block";
    var item = x.getElementsByClassName("card-title");
    var sv = item[0].innerHTML;
   
    data(sv);
    

    
  }
  function itemOff(){
    document.getElementById("selectedItemHolder").style.display="none";
  }
  function basket(){
    var itemId = document.getElementsByClassName("Domi")[0].id;
    var itemMax = document.getElementsByClassName("Domi")[1].id;
    var itemAmount = document.getElementById("amount").value
    var itemSv = document.getElementById("amount").value.replace(/\D/g,'');
    if (itemAmount<=itemMax) {
      if (itemAmount!="" && itemAmount>0 && itemAmount==itemSv) {
            x = {itemId, itemAmount}
            orderUpdate(x);
      }
      else{
        alert("Helytelen érték!");
      }
    }
    else {
      alert("Sajnos ennyi nincs készleten!");
      
  }
    }

function data(query)
 {
  $.ajax({
   url:"search2.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#selectedItemHolder').html(data);
   }
  });
 }

function orderUpdate(e){
  asd = e;
   $.ajax({
      type:'POST',
      url:'order.php',
      data:{item:asd},
        success:function(orderUpdate){
            
            alert("Hozzáadva a kosárhoz!");


        }


 })
}


</script>















      </div>
      
    </div>









</body>
</html>





















    