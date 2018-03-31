<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1" >
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">

<title>User Registration</title>
</head>

<body>

<div class="container">

	<div class="row">
		<header>
			<?php include "includes/header.php"; ?>
		</header>
	</div>
	
	<div class="row">
		
		<div class="col-md-3">
			<a href="index.php" class="btn btn-primary">Back</a>
		</div>
		
		<main class="col-md-6">
		
		<h3>Membership Registration</h3>
		<hr>
		
		
		<!--registration form -->
		<form action="scripts/register.php" method="post" role="form">
			
			<div class="form-group">
				<label for="firstname">Username</label>
				<input type="text" class="form-control" placeholder="Username" id="username" name="username" required >
									
			</div>
			
			<div class="form-group">
				<label for="firstname">Firstname</label>
				<input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required >
			</div>
			
			<div class="form-group">
				<label for="firstname">Lastname</label>
				<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required >
			</div>
			
			
			<!--gender selection ,we use select so that only on option can be selected-->
			<div class="form-group">
				<label for="firstname">Gender</label>
				<select class="form-control" placeholder="select gender" id="gender" name="gender" required>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			
			
			<!--using new html 5 date input type -->
			<div class="form-group">
				<label for="date of birth">Date of Birth</label>
				
				<input type="date" id="dob" name="dob" class="form-control" required>
			</div>
			
			
			<!--html 5 number type will only allow numbers as input -->
			<div class="form-group">
				<label for="phone">Phone</label>
				<input type="number" class="form-control" id="phone" name="phone" placeholder="Phone number" required >
			</div>
			
			
			<!--new html 5 email type,checks if user entered email that is in valid form-->
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required >
			</div>
			
			<div class="form-group">
				<label for="pword">Password</label>
				<input type="password" class="form-control" id="pword" name="pword" placeholder="Password" required >
			</div>
			
			<!--submit form button -->
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit">Submit</button>
			</div>
	
		</form>
		
		</main>
	
	</div>
	
	
	<!--include footer here-->
	<div class="row">
		<?php include "includes/footer.htm"; ?>
	</div>




</div>

<!--import javascript files-->

<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
