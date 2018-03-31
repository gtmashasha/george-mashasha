
<?php 
	error_reporting(0);
	//include browse projects file 
	include_once("scripts/browse_projects.php");
	//check if user is logged in ,redirect to log in if not 
	if(!isset($_SESSION["user_id"])){
		header("location:index.php");
	}


?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1" >
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">

<title>Browse Projects</title>
</head>

<body>

<div class="container">

	
	<div class="row">
		<?php include "includes/header.php"; ?>
	</div>
	
	<h3>Browse Projects</h3>
	<hr>
	
	<div class="row">
	
	<main>		
		
		<!--table for displaying projects currently available  -->
		
		<table class="table table-bordered table-hover">
			<thead>
			<tr>
				<th>Project Name</th>
				<th>Language</th>
				<th>Author</th>
				<th>Description</th>
				<th>Upload Date</th>
				<th>&nbsp;  </th>
			</tr>
			</thead>
			<tbody>
			
			<?php 
				// if records found is greater than 0 then display results in table form
				//to do this loop through the results array create a table row element and table data elements for each result using 
				if ($count > 0){
					//loop through results array using foreach loop
					foreach($result as $row){
						//create string variable to store the table row
						$html = "<tr>";
						// create table data element by appending results data to <td> elements 
						//  add each each table data element to the table row variable 
						$html .= "<td>". $row["project_name"] ."</td>";
						$html .= "<td>". $row["language"] ."</td>";
						
						//get uploader's name from user id 
						$html .= "<td>". getUsername($row["author"],db_connect()) ."</td>";
						$html .= "<td>". $row["description"] ."</td>";
						$html .= "<td>". $row["uploaded"] ."</td>";
						
						// create download link by posting filename to downloads page which processes all download requests
						$html .= '<td><a href="scripts/downloads.php?file='.$row['project_file'] .'\" class="btn btn-primary" >Download file</a></td>';
						
						
						$html .= "</tr>";
						//close table row element
						//display table row variable which should create a row in the table with required data
						echo $html ;
					
					}
							
				}else{
					//create table row element to display no records founds if no results to show
					$err =  "<tr>";
					$err .= "<td colspan=6>";
					$err .= "<h2 class='h2 text-center'>No projects currently available</h2></td></tr>";
					echo $err ;
				}
				
				
				
			
			?>
		
		</tbody>
		</table>
		
		
		
		
	</main>
	
	
	</div>
	
	<!--include footer here-->
	<div class="row">
		<?php include "includes/footer.htm"; ?>
	</div>
	
	
	



</div>


<!--import javascript files -->
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
