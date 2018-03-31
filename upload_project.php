<?php
session_start();
error_reporting(0);
if(!isset ($_SESSION['user_id'])){
	echo "<script>alert('Oooops !!! Seems like the requested page is for registered members only');</script>";
	header("location:index.php");
}
?>


<!DOCTYPE html >
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width initial-scale = 1" />
	<title>Our Team</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/jquery.datetimepicker.min.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>

<div class="container">
	<div class="row">
		<header >
			<?php include_once("includes/header.php"); ?>
		</header>
	</div>
	
	<div class="row">
		<div class="col-md-3">
			<p>&nbsp; </p>
		</div>
		
		<main class="col-md-6">
			<h3>Upload Project </h3>
			<hr>
			
			<form action="scripts/project_upload.php" method="post" role="form" enctype="multipart/form-data" >
				<div class="form-group">
					<label for="date">Project Name</label>
					<input type="text" id="project_name" name="project_name" class="form-control" required >
				</div>
				
				<div class="form-group">
					<label for="language">Language</label>
					<select  id="language" name="language" class="form-control" required >
						<option>Java</option>
						<option>Php</option>
						<option>VB.net</option>
						<option>Android</option>
					</select>
					
					
				</div>
				
				<div class="form-group">
					<label for="date">Description</label>
					
					<textarea id="description" name="description" class="form-control" required placeholder ="Project Details" rows="6">
					
					</textarea>
						
				</div>
				
				<div class="form-group">
					<label for="date">Project File</label>
					<input type="file" id="project" name="project" class="form-control"  required >
					<p class="help-block">Upload code project as zipped file.File should not be larger than 10mb .</p>
				</div>
				
				<div class="form-group">
					
					<button type="submit" id="submit" name="submit" class="btn btn-primary">Share Project</button>
				</div>
				
				
			</form>
		</main>
	</div>
	
	
	<div class="row">
		<?php include "includes/footer.htm";?>
	</div>
	
	
	

</div>



<script type="text/javascript" src="js/jquery-3.1.1.min.js" ></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script>
$(document).ready(function(){

var cur_date = new date();

$('#datetimepicker1').datetimepicker({
	inline:true
});



$("#app_date").blur(function(){
	var app_date = $("#app_date").value();
	


});

});

</script>
	
</body>
</html>
