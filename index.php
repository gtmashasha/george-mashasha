<!--
this page uses bootstrap for styling and positioning html elements .
using bootstrap classes ,html elements can be sized and positioned 
inline with bootstrap's grid system 

 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1" >
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">

<title>Home</title>
<!--css styles for carousel image resizing  -->
<style>
.carousel-inner > .item > img {
		width:100%;
		height:300px;
	}
</style>



</head>

<body>


<!--container class adds padding around the main area of the page.everything on the page should be inside it -->
<div class="container">

	<div class="row">
		<!--include header file with navbar  -->
		<header >
			<?php include_once("includes/header.php"); ?>
		</header>
	</div>
	
	<div class="row">
		<!-- boostrap carousel for displaing image slide show -->
			<div class="carousel slide" id="myCarousel">
				<!--indicators-->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>											
					</ol>
								
				<!--indicators-->
				
				<!--wrapper-->
					<div class="carousel-inner" role="listbox">
												
						<div class=" active item">
							<img src="images/coding.jpg" alt="surgery "  class="carousel_img" >
							<div class="carousel-caption">
								Welcome to the PlayGround <br />
								Place where Developers can share their cool toys and tricks .....
							
							</div>
						</div>
						
						<div class="item">
							<img src="images/filesharing.png" alt="surgery" width="" height="300px" class="carousel_img" >
						</div>
						
						<div class="item">
							<img src="images/community.jpg" alt="surgery" width="" height="300px" class="carousel_img" >
						</div>
						
					</div>
				<!--wrapper-->
				
				<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				<!--controls-->
			
			</div>
		
		<!--end carousel-->
	</div>
	
	<div class="row">
					
		
		<div class="col-md-2"></div>
		
		<div class="col-md-8">
			<div class="well text-justify" style="font-weight:bolder">
				Welcome to the Play Ground .Place for developers to share their toys,tips and tricks of the trade .
				Its a portal for file and knowledge sharing .Feel free to post  questions to our forum and get well from the community.
				Register now to become a member and join the fun !!!!
			</div>
			
			<!--hidden log in modal triggered by log in button in navbar -->
			<div class="modal fade" tabindex="-1" aria-labelledby="mymodallabel" aria-hidden="true" id="log_in_modal" >
			
				<div class="modal-dialog">
					
					<!--modal body -->
					<div class="modal-content">
						<div class="modal-header">
							<button class="close" type="button" aria-hidden="true" data-dismiss="modal"> &times; </button>
							<h4 class="modal-title" id="mymodallabel">Log In</h4>
						</div>
						
						<div class="modal-body">
							<!--log in form housed in modal. form to be posted to log_in.php script  -->
							<form action="scripts/log_in.php" method="post" >
								<!--username input field -->
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" placeholder="Username" id="username" name="username" required >
								</div>
								
								
								<!--password field -->
								<div class="form-group">
									<label for="username">Password</label>
									<input type="password" class="form-control" placeholder="password" id="pword" name="pword" required >
								</div>
								
								<!--log in button -->
								<div class="form-group">
									<button type="submit" class="btn btn-primary" id="log_in" name="log_in">Log In</button>
								</div>
							
							</form>
						
						</div>
						
						<div class="modal-footer">
							<!--link to registration page for users who want to register -->
							<a href="registration.php"  class="btn btn-primary"  > Register to become a member </a>
							<!--modal close button  -->
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!--end modal body -->
				
				</div>
			
			</div>
			
			<!--end modal -->
		</div>
	
	</div>
	
	<div class="row">
		<!--infor sections using bootstrap grid system and styling   -->
		<div class="col-md-4">
			<div class="well article">
					
				<div class="text-center">
					<img src="images/filesharing.png" alt="camera" height="100px" width="150px" class="img-circle" >
				</div>
				
				<h4 class="text-center">File Sharing</h4>
				
				
				<p>
					Our service allows registered members to share their code projects through unlimited file upload 
					and download facilities offered.
				</p>
			
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="well article">
					
				<div class="text-center">
					<img src="images/community.jpg" alt="camera" height="100px" width="150px" class="img-circle" >
				</div>
				
				<h4 class="text-center">Community of Developers</h4>
				
				
				<p>
					Our service allows registered members to share their code projects through unlimited file upload 
					and download facilities offered.
				</p>
				
				
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="well article">
					
				<div class="text-center">
					<img src="images/coding1.jpg" alt="camera" height="100px" width="150px" class="img-circle" >
				</div>
				
				<h4 class="text-center">Lots of Code and Fun</h4>
				
				
				<p>
					Download any files from our repository and join the fun .
				</p>
				
				
			</div>
		</div>
	</div>
	

	
	<!--add  the contents of footer.htm here  -->
	
	<div class="row" style="bottom:2px;">
		<?php include "includes/footer.htm"; ?>
	</div>




</div>


<!--import all required javascript files here  -->
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script>
$(document).ready(function (){

	//the script simply hides the modal when registration button is clicked
	$("#reg").onclick(function (){
		document.location("registration.html");
		$("#log_in_modal").modal("hide");
	});




});

</script>


</body>
</html>
