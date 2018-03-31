<?php
//start session to track user log in sessions and turn off error reporting 
session_start();
//error_reporting(0);


//function to connect to database using PDO classes
function db_connect (){

	//assign database coonection string paths like host,database name,username and password to variables and use the variables instead when connecting
	$host = "localhost";
	$db_name= "project";
	$user = "root";
	$pword = "";
	
	//the try block is used to handle errors that may occur while connecting to the databse 
	
	try{
		
		
		//create database connection and assign it to variable con and set connection attributes
		
		$con = new PDO("mysql:host=$host;dbname=$db_name",$user, $pword);
		$con->setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$con->setAttribute (PDO::ATTR_EMULATE_PREPARES, false);
		
		
		//the function returns a connection to the database if successful
		return $con ;


	// catch any database connection errors and get the exactt error message  
	}catch (PDOExcpeption $e){
	
		echo "Connection Error !" . $e->getMessage();
		die ();
	}


} // end database connection function 




// function for redirecting to new page ,it takes one parameter that is the url of the page to be redirected to and passes it onto the header function

function redirect($url){
	header("location: $url");
}





//this function accepts two parameters ,id of user and database connection 
//it  uses the database connection to connect to database and retrieve the username of the user who's id matches the first parameter

function getUsername($user_id,$con){
	//sql query to get record of user whose ID mathces the one provided in the query 
	$sql = "select * from users where id = :user_id" ;
	
	$dbh = $con ;
	$stmt =$dbh->prepare($sql);
	//execute query 
	$stmt->execute(array(":user_id"=>$user_id));
	//return results of  query as associative array and store in variable named row 
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	//return count of result set 
	$count = $stmt->rowCount();
	
	
	//check if record exists and assign the required username to variable
	if($count == 1){
		$username = $row["username"] ;
	}else{
		$username = "Unknown user";
	}
	
	
	//return contents of username variable
	return $username ;

}

?>