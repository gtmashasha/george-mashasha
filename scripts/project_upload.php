<?php
//tuern off error reporting
//error_reporting(0);
// include config file with database connection function 
include ("../includes/config.php");



//define variable to store errors
$err_msg = "" ;


//check if submit button clicked 
if (isset($_POST["submit"])){

		//check if all required fields have been provided and store respective error messages in error messages variable if not
	if(!isset($_POST["project_name"])){
		$err_msg = "Project name required";
		exit;
	}elseif(!isset($_POST["language"])){
		$err_msg = "Project langauge required";
		exit ;
	}elseif(!isset($_POST["description"])){
		$err_msg = "Description required";
		exit ;
	}elseif(!isset($_FILES["project"]) || $_FILES["project"]["size"] == 0){ //check if file was uploaded and that its not 0bytes in size 
		die( "0 byte project file uploaded");
	}elseif(!$_FILES["project"]["type"] == ".zip"){ // check if uploaded file is required type i.e .zip file
		die("Only zip files allowed");
	
	// check is_uploaded_file function  if uploaded file is valid 
	}elseif(!is_uploaded_file($_FILES["project"]["tmp_name"])){
		die("Invalid file uploaded");
	//check if any errors occured with upload
	}elseif($_FILES["project"]["error"] > 0){
		die("error uploading file");
	}else{
		//assign form data to variables
		
		$project_name = $_POST["project_name"] ;
		$language = $_POST["language"] ;
		$description = $_POST["description"] ;
		
		//assign current date to dt variable 
		$dt = date("d, M, Y") ;
		//get user id from session global varibale 
		$author = $_SESSION["user_id"] ;
		//set directory for uploaded projects 
		$projects_folder = "projects/" ;
		$project_file = $_FILES["project"];
		$file_name = basename($project_file["name"]) ;
		
		echo $file_name ;
		
		
		//check if directory to store uploaded files exists ,if not the use mkdir to create it 
		if(!file_exists($projects_folder)){
			mkdir("../projects",0777,true);
		}
		
		
		//set path to store uploaded file
		$path = "../projects/" . basename($project_file["name"]);
		
		//move uploaded file to uploads directory and check if successfull or not 
		if(!move_uploaded_file($_FILES["project"]["tmp_name"],$path)){
			// if move failed stop execution and display failed message
			die("Project file could not be copied") ;
		}else{
			// on success show success message
			echo "<script>alert('file moved successfully');</script>" ;
		
		}
		
		
		//wrap in try..catch block to catch any errors 
		
		try{
			
			//assign sql query to be executed to variable to make prepare statement neater 
			//we use parameters to avoid sql injection 
			
			$sql = "INSERT INTO projects (project_name,language,description,project_file,author,uploaded) VALUES 
			(:project_name,:language,:description,:project,:author,:date)";
			
			
			//create database connection using db_connect function in config.php file
			$dbh = db_connect();
		
			
			//prepare query for execution 
			$stmt = $dbh->prepare($sql);
			
			
			//bind parameters in sql statement to their values 
			$stmt->bindParam(":project_name",$project_name);
			$stmt->bindParam(":language",$language);
			$stmt->bindParam(":description",$description);
			$stmt->bindParam(":project",$file_name);
			$stmt->bindParam(":author",$author);
			$stmt->bindParam(":date",$dt);
			
			
			//execute query
			$stmt->execute();
			var_dump($stmt);
			
			
			//check if upload successful 
			if($stmt){
				//if success show success message and redirect to browse projects file 
				echo "<script>alert('project uploaded successfully');</script>";
				redirect("../browse_projects.php");
			}else{
				// if failed show failed message and go back to upload page 
				echo "<script>alert('project upload failed');</script>";
				redirect("../browse_projects.php");
			}
				
		//catch block handles caught errors 		
		}catch(POException $e){
			//display error message 
			echo $e->getMessage () ;
		}
	
	}
	
	
	
	
	//check input errors and display if any 
	if(!empty($err_msg)){
		echo $err_msg ;
	}
	
	
	
	
	




} //check if form submitted


?>
