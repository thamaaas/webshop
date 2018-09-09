<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
$sv = "root";
    $pdo = new PDO('mysql:host=localhost;dbname=zoldseg', $sv, $sv);
    $pdo ->exec("set names utf8");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt search query execution
try{
    if(isset($_POST["query"])){
        // create prepared statement
        $searchsv = $_POST["query"];
        $sql = "SELECT * FROM product WHERE product_name = '$searchsv'";
        
        $stmt = $pdo->prepare($sql);
        
        // bind parameters to statement
        ;
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                switch ($row['product_unit']) {
                    case '1':
                        $unit = "Kg";
                        break;
                    case '2':
                        $unit = "Db";
                        break;
                    case '3':
                        $unit = "Rekesz";
                        break;
                    case '4':
                        $unit = "Láda";
                        break;
                    case '5':
                        $unit = "Zsák";
                        break;
                    
                }
                if ($row["product_amount"]>0) {
                    echo '<div class="container">'.
    '<div class="row">'.
      '<div class="col-md-6 offset-md-3" id="selectedItem">'.
        '<div class="row">
          <div class="col-md-6">'.
                '<img class="card-img-top" '.$row['product_pic'].'>'.'</div>
            <div class="col-md-6">
                <div class="col-12 Domi" id="'.$row['product_id'].'"><label>Név: </label>'.$row['product_name'].'</div>
                <div class="col-6"><label>Származási ország: </label>'.$row['product_country'].'</div>
                <div class="col-6"><label>Osztály: </label>'.$row['product_class'].'</div>
                <div class="col-5 Domi" id="'.$row['product_amount'].'"><label>Egységár: </label>'.$row['product_price'].' Ft/'.$unit.'</div>
                <div class="col-12">'.'<label>Mennyit szeretne rendelni?</label>'.'<input type="text" id="amount" placeholder="Egység">'.'</div>
                <div class="col-12"><input type="button" onclick="itemOff()" Value="Mégse"><input type="button" onclick="basket()" Value="Kosárba"></div>
            </div>
        </div>
      </div>
    </div>
  </div>';
                }
                else {
                    echo '<div class="container">'.
    '<div class="row">'.
      '<div class="col-md-6 offset-md-3" id="selectedItem">'.
        '<div class="row">
          <div class="col-md-6">'.
                '<img class="card-img-top" '.$row['product_pic'].'>'.'</div>
            <div class="col-md-6">
                <div class="col-12"><label>Név: </label>'.$row['product_name'].'</div>
                <div class="col-6"><label>Származási ország: </label>'.$row['product_country'].'</div>
                <div class="col-6"><label>Osztály: </label>'.$row['product_class'].'</div>
                <div class="col-5"><label>Egységár: </label>'.$row['product_price'].' Ft/'.$unit.'</div>
                <div class="col-12">'.'<label>Mennyit szeretne rendelni?</label>'.'<input type="text" placeholder="Egység">'.'</div>
                <div class="col-12"><input type="button" onclick="itemOff()" Value="Mégse"><h3>Jelenleg nincs raktáron!</h3>
            </div>
        </div>
      </div>
    </div>
  </div>';
                }
                


                
            }
        } else{
            echo "<p>Nincs találat :c</p>";
        }
    }  
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);

