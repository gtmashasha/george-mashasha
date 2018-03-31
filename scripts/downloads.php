<?php

//check if file has been requested and that the name of the file is the same as provided name
//&& basename($_GET['file']) == $_GET['file']
if (isset($_GET['file'])) {
	$filename = basename($_GET['file']);
} else {
	$filename = NULL;
}


//set error message 
$err = 'Sorry, the requested file is not available.';

if (!$filename) {
	// if variable $filename is NULL or empty display the message
	echo $err;
} else {
	// define the path to your download folder and append the file name to direct to create the full path to the file
	$path = "../projects/". $filename;
	
	
	// check if file exists and is readable
	if (file_exists($path) && is_readable($path)) {
		// get the file size and send the http headers
		$size = filesize($path);
		header('Content-Type: application/octet-stream');
		header('Content-Length: '.$size);
		header('Content-Disposition: attachment; filename='.$filename);
		header('Content-Transfer-Encoding: binary');
		// open the file in binary read-only mode
		// display the error messages if the file can´t be opened
		$file = @ fopen($path, 'rb');
		if ($file) {
			// stream the file and exit the script when complete
			fpassthru($file);
			
			echo "<script>alert('downloading $file');</script>";
			exit;
		} else {
			//error retrieving file contents,dispay error message 
			echo "streaming file";
		}
	} else {
		echo "File does not exist or is unreadable";
	}
}



?>