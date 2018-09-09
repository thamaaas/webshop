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
        $searchsv = '%'.$_POST["query"].'%';
        $sql = "SELECT * FROM product WHERE product_name LIKE '$searchsv' or product_cat like '$searchsv'";
        $stmt = $pdo->prepare($sql);
        
        // bind parameters to statement
        ;
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo '<div class="card" style="width: 18rem;" onclick="itemOn(this)">'.
                '<img class="card-img-top" '.$row['product_pic'].'>'.
                '<div class="card-body">'.
                  '<h5 class="card-title">'.$row['product_name'].'</h5>'.
                  '<p class="card-text">'.$row['product_description'].'</p>'.
                  
                '</div>
              </div>'

                ;
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



//fetch.php
/*
$connect = mysqli_connect("localhost", "root", "root", "zoldseg");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 mysqli_set_charset( $connect, 'utf8');
 $query = "SELECT * FROM product WHERE product_name LIKE '%".$search."%'";
 
}

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  $output .=$row["product_name"];
 }
 echo $output."<br>";
 echo "</ br>";
}
else
{
 echo 'Data Not Found';
}
*/
?>































