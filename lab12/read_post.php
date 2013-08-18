<?php

/*
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 7 Feb 2012
Description: Lab 12
*/

	
	ob_start();
	
	if ($_POST['read_post'] =="Read" ){
		
		header("Location:./read.php"); //Redirect browser
		exit;
		}
	else {

		header("Location:./get_text.html"); //Redirect browser
		exit;
		}

	ob_end_flush();
	
?>