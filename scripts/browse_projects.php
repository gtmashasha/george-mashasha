<?php

include_once("includes/config.php");
//include database configurations file
		
		
		//use try...catch block to trap errors 
		try{

			//define query to execute		
			$sql = "select * from projects ";
			//define database connection
			$dbh = db_connect();
			//prepare statement
			$stmt = $dbh->prepare($sql);
			//execute query 
			$stmt->execute();
			
			//get count of affected records and store in variable 
			$count = $stmt->rowCount();
			//fetch all results and store in $result array 
			$result = $stmt->fetchAll();
			
			
		
		//handle all errors and exceptions in catch block 
		
		}catch (PDOException $e){
			// display error messages
			echo "Error !" . $e->getMessage() ;
		}
		
	
	















?>