<?php  

// include configurations file 
include_once("../includes/config.php");

//check if user is already logged in and redirect to browse_projects page if true else continue log in 
if (isset($_SESSION["user_id"])){
	redirect("../browse_projects.php");
}else{

	//check if log in button clicked 
	if (isset($_POST["log_in"])){
		//check if username and password provided,display error message if not 
		if(!isset($_POST["username"])){
			echo "Username required";
		}elseif(!isset($_POST["pword"])){
			echo "Password required";
		}else{
		
			//assign username and password to variables
			$username = $_POST["username"];
			$pword = $_POST["pword"];
			//wrap in try..catch block to catch any errors
			try{
				//connect to database 
				$dbh = db_connect() ;	
				
				// query to be exeuted 
				$sql = "select * from users where  username=:username and pword=:pword" ;		
				
				//prepare statement for exeution
				$stmt = $dbh->prepare($sql);
				//execute query 
				$stmt->execute(array(':username'=>$username ,':pword'=> $pword));
				//fetch results of query as array and store in $row variable 
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				//get count of returned records
				$count = $stmt->rowCount();
				
				//check if record found ,if found then start session and log in user.store user id and username in session variables
				if ($count == 1){

					// log in success ,store user id and userame in session variables
					$_SESSION["user_id"]= $row["id"] ;
					$_SESSION["username"]= $row["username"] ;
					redirect("../browse_projects.php");
				}else{
					// log in failed .show failed message and go back to log in page
					echo "<script> alert('log in failed'); </script>";
					header("location:index.php");
				}
				
			}catch(PDOException $e){ // if any errors ,show error messages
				echo "Error ! <br>" . $e->getMessage();
			
			}
			
			
		}
	
	
	}
}

?>