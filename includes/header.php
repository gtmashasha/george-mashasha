<?php
	

?>

<!--
	html and bootstrap navigation bar created seperately to be included in all pages it is required.
	It uses bootstrap classes for styling and positioning 
	It uses bootstrap's responsive classes to handle responsiveness
	the navigation bar contains all links to other pages on the site and is primarily used for navigation  


-->
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		
		<!--handle navbar responsiveness -collapse navbar on smaller screens-->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_nav">
			<span class="sr-only"> Toggle Navigation </span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="#" class="navbar-brand">The Play Ground</a>
	</div>
	
	<ul class="nav navbar-nav navbar-left" >
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="browse_projects.php">Browse Project</a></li>
		<li><a href="upload_project.php">Upload Project</a></li>
		<li><a href="about.php">About Us</a></li>
	</ul>
	
	<!--log in button -->
	<button class="btn btn-default navbar-btn" type="button" data-toggle="modal" data-target="#log_in_modal" id="login_btn"> Log In | Register 
	</button>
	
	<!--paragraph showing username -->
	<p class="navbar-text"> <span class="glyphicon glyphicon-user"> </span>
	
		<?php
			//start user session 
			session_start();
			//check if user is logged in and display username in navigation bar 
			if (isset($_SESSION["user_id"])){
				echo $_SESSION["username"];
				
			}else{
				//display welcome visito message if not logged in 
				echo "Welcome Visitor" ;
			}
		
		?>
	
	
	  </p>
	  
	  
	  <!--log out button -->
	  <a class="btn btn-default navbar-btn" href="scripts/log_out.php" id="log_out" >Log Out</a>
	

</nav>
