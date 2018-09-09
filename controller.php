<?php
class Controller
{
	const server = "localhost";
	const db = "zoldseg";
	const dbuser = "root";
	const pw = "root";
	public $isLoggedIn = false;




	

	
	
	public function __construct()
	{
		if (session_status() != PHP_SESSION_ACTIVE) {session_start();}
		if(isset($_SESSION["user_id"]))
		{
			$this -> isLoggedIn = true;
		}
	}
	


public function user(){
		$currentUserId = $_SESSION["user_id"];
		$db 	= new PDO("mysql:host=".static::server.";dbname=".static::db.";", static::dbuser, static::pw);
		$sql 	= "SELECT * FROM user WHERE user_id = '$currentUserId'";
/*
		foreach ($db->query($sql) as $row) {
			print_c($row);
		}
*/
		$userData = $db->query($sql);
        $res = $userData -> execute();
        


        $result = $db -> prepare($sql);
        $result -> execute();
        $result = $result -> fetchAll(PDO::FETCH_ASSOC);
        
        $result = $result[0];print_c($result);
        $_SESSION["userData"] = $result; 
		
/*
		$userdataSv = query();
		$userData = $this -> connect() -> execute();
        $userData = $userData -> fetchAll(PDO::FETCH_ASSOC);
        
      	print_c($userData);
         die();*/
	}



	public function connect()
	{
		
			try {
				$connect= null;
				$connect = new PDO("mysql:host=".static::server.";dbname=".static::db.";", static::dbuser, static::pw);
				$connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $connect;

			} catch (PDOException $e) {
				echo "connection failed: ".$e-> getMessage();	die();
			}
	}
	  public function logout(){


						  		$db 	= new PDO("mysql:host=".static::server.";dbname=".static::db.";", static::dbuser, static::pw);
						      	$date = date('Y-m-d');
						      	$deteupdateSV = $result["user_id"];
								$sql 	= "UPDATE user SET user_last_in='$date' where user_id ='$deteupdateSV'";

								$updateData = $db->query($sql);
				        		$res = $updateData -> execute();

			    session_destroy();
			    header("Location: /");

  }
	
	
	public function login()
	{
		

        $username = $_POST["username"];
        $pass = $_POST["passwd"];
        $hashedpasswd = hash('sha256', $pass);
        $binds = ["username" => $username,
                    "pass" => $hashedpasswd
                ];

        $str = "SELECT * FROM user WHERE user_name = '$username'"; //ez itt így nem jó
        //$str ="select * from user where user_name = 'thamas'"; titkosításssss sha256
        $result = $this -> connect() -> prepare($str);
        $result -> execute($binds);
        $result = $result -> fetchAll(PDO::FETCH_ASSOC);
        
        //var_dump($result); die();

        if(empty($result))
        {
          $errormessage="hibás felhasználónév és vagy jelszó itt is!";
            die();
        }
       $result = $result[0];
       if($hashedpasswd == $result["user_passwd"])
       
	      {
	      	//session_destroy();
	      	$_SESSION["user_id"] = $result["user_id"];
	      	$_SESSION["user_permission"] = $result["user_permission"];


	      	


	      


	      	header("Location: /");
	      }
       // hibás jelszó
   }


}

function print_c($obj, $hideplace = false)
{
	// a böngésző console-ba ír előreformázottan szöveget (bármint, amit egy print_r kezelni tud)
	echo "<script> console.log(".json_encode(extractPreformatedText($obj, $hideplace)).");
	</script>";
}
function print_pre($obj, $StopRunning = false, $HidePlace = false)
{
	// a képernyőre irja ki a szöveget, előregotmázottan
    echo "<pre>" . extractPreformatedText($obj, $HidePlace) . "</pre>";
    if($StopRunning) die();
}
function extractPreformatedText($obj, $HidePlace)
{
	// a print_c és print_pre segédfüggvénye
	// a szöveget előreformázottá varázsolja és hozzáírja hogy honnan hívták meg
	ob_start();
	print_r($obj);
	$str = ob_get_clean();
	$debug = debug_backtrace();
	if(!$HidePlace)
	$str .= PHP_EOL . " at file: " . $debug[1]['file'] . " line " . $debug[1]['line'];
	unset($debug, $obj, $HidePlace);
	return $str;
}
