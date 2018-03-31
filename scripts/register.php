<?php 
//include confi.php file which contains database connection function
include "../includes/config.php";

//declare $error variable as array ro hold all error encountered
$error = array();


//check if submit button was clicked
if (isset($_POST['submit'])){

	//check if all required fields have been entered
	if(!isset($_POST["username"])){
		$error[] = "username required";
	}elseif(!isset($_POST["fname"])){
		$error[] = "firstname required";	
	}elseif(!isset($_POST["lname"])){
		$error[] = "last namme required";
	}elseif(!isset($_POST["gender"])){
		$error[] = "gender required";
	}elseif(!isset($_POST["dob"])){
		$error[] = "date of birth required";
	}elseif(!isset($_POST["phone"])){
		$error[] = "phone number required";
	}elseif(!isset($_POST["email"])){
		$error[] = "email required";
	}elseif(!isset($_POST["pword"])){
		$error[] = "password required";
	}else{
		//if all fields provided try to store their values in appropriate variables
		try{
			
			$username = trim($_POST["username"]);
			$fname = trim($_POST["fname"]);
			$lname = trim($_POST["lname"]);
			$gender = trim($_POST["gender"]);
			$dob = trim($_POST["dob"]);
			$phone = trim($_POST["phone"]);
			$email = trim($_POST["email"]);
			$pword = trim($_POST["pword"]);
			
			
			//assign database connection to $dbh variable 
			$dbh = db_connect();
			
			//sql to insert data into users database table using a parameterized query
			$sql = "INSERT INTO users (username,fname,surname,gender,dob,phone,email,pword) VALUES 
			(:username,:fname,:lname,:gender,:dob,:phone,:email,:pword)";
			
			//prepare the statement hadle for execution
			$stmt = $dbh->prepare($sql);
			
			
			//bind parameters to their values 
			
			$stmt->bindParam(":username", $username);
			$stmt->bindParam(":fname", $fname);
			$stmt->bindParam(":lname", $lname);
			$stmt->bindParam(":gender", $gender);
			$stmt->bindParam(":dob", $dob);
			$stmt->bindParam(":phone", $phone);
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":pword", $pword);
			
			//execute query and check if successful 
			if($stmt->execute()){
				echo "<script>alert('Registration success');</script>";
				redirect("../browse_projects.php");
				//if successful redirect to browse_projects page
				
			}else{
				redirect("../registration.php");
				//if failed go back to registration page
			}
			
			
			
			
			
			//use catch block to catch any errors and display error message 
		}catch(PDOException $e){
			echo "Error !" .$e->getMessage() ;
		}
	}
	
	
	//check if errors variable is not empty and display the errors 
	if($error){
		//loop through errors array and display each error  
		foreach($error as $item){
			echo $item . "<br>";
		}
	}


}


?>
