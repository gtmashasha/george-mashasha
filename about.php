<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1" >

<!--import css files -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">

<title>About Us</title>
</head>

<body>


<!--bootstrap styled container that houses all page contents  -->
<div class="container">

	<!--include contents of header file here -->
	<div class="row">
		<?php include "includes/header.php"; ?>
	</div>
	
	<h3>About Us</h3>
	<hr>
	
	<!-- bootstrap tabbed content creates multiple tabs with different content  -->
			
			<div id="tabs_wrapper">
				<!--tab navigation  -->
				<ul class="nav nav-tabs" id="myTabs">
					<li class="active">
						<a href="#home" data-toggle="tab" ></span> Our Team</a>
					</li>
					
					<li >
						<a href="#contact_details" data-toggle="tab" > Terms and Conditions </a>
					</li>
					
					<li >
						<a href="#work_hours" data-toggle="tab"> About Us  </a>
					</li>		
				</ul>
				
				<!--tab panes with the tab contents -->
				
				<div class="tab-content" id="my_tabs">
					
					<!--tab 1-->
					<div class="tab-pane active in fade" id="home">
						
						<h3 class="text-center">Our Team </h3>
						
						<div class="row">
							<div class="col-md-6">
								<div class="well well-sm">
									<div class="media">
										<div class="media-left">
											<img src="images/images.png"  height="120px" width="120px" alt="team member pic" class="media-object">
										</div>
										
										<div class="media-body">
											<h4 class="media-heading">George Mashasha </h4>
																					
												<p>
													Lead developer on the project  .
												</p>
												 
										</div>
									</div>
								</div>
							</div>
										
							<div class="col-md-6">
								<div class="well well-sm">
									<div class="media">
										<div class="media-left">
											<img src="images/images.png" height="120px" width="120px" alt="team member " class="media-object">
										</div>
										
										<div class="media-body">
											<h4 class="media-heading">Lindsay Dexta</h4>
											<p>
												Database administrator .Lindsay takes care of all database issues . 
													 
											</p>
											
											
										</div>
									</div>
								</div>
							</div>
												
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<div class="well well-sm">
									<div class="media">
										<div class="media-left">
											<img src="images/images.png"  height="120px" width="120px" alt="team member" class="media-object">
										</div>
										
										<div class="media-body">
											<h4 class="media-heading">Cliffton Bailey</h4>
											<p>
												Technician and Network Administrator.Network wizard keeping our networks 
												always at their best.
																		
												 
											</p>
										</div>
									</div>
								</div>
							</div>
										
							<div class="col-md-6">
								<div class="well well-sm">
									<div class="media">
										<div class="media-left">
											<img src="images/images.png" height="120px" width="120px" alt="team member" class="media-object">
										</div>
										
										<div class="media-body">
											<h4 class="media-heading">Damian </h4>
											<p>
												Front end developer with mad skills ,has a couple of languages under his belt and still adding
												to his skills .
													 
											</p>
											
											
										</div>
									</div>
								</div>
							</div>
												
						</div>
					</div>
					<!--end tab 1-->
					
					<!--tab 2-->
					<div class="tab-pane fade" id="contact_details">
						
						<h3 class="text-center">Terms and Conditions </h3>
						
						<p>By singing up to be member you are agreeing to the following terms and conditions:</p>
						
						<ul>
							<li> All projects obtained from this site can be downloaded and reused anywhere ,for personal or commercial use.
								Owner can choose to have his material used in a particular way. 
							</li>
							
							<li>
								
							</li>
						</ul>
					
					</div>
					
					<!--end tab 2-->
					
					<!--tab 3-->
					<div class="tab-pane fade" id="work_hours">
						
						<h3 class="text-center">About Us </h3>
						
						<p>
							 The idea came up during my college days ,learning to code ,long hours on the internet searching for
							 helpful code .Thats when it hit me to create a portal where developers can just share their material,ideas 
							 and problems as well as solutions with other developers across the globe.The site was launched in March 2018
							 and will continue to add more features .
							 
						</p>
							
					</div>
					
					<!--end tab 3-->
					
				</div>
				
				<!--end tab panes -->
			
			</div>
			
	<!--End tabs -->
	
	<!--include footer here  -->
	<div class="row">
		<?php include "includes/footer.htm"; ?>
	</div>
	
	
	



</div>

<!--import javascript files  -->

<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
