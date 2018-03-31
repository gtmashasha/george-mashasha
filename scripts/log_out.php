<?php
	
	if (!session_start()){
		session_start();
	}
	
	
	//unset session variables and destroy session to log out user
	
	
	
	unset($_SESSION["user_id"]);
	session_destroy();
	
	// redirect back to home page 
	header("location:../index.php");

?>