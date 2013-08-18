<?php 
ob_start();
/*
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 28 Feb 2012
Description: Lab 19
*/

?>

<?php
date_default_timezone_set('America/Vancouver');

// Need the session:
session_start();
header('Cache-Control: no-store, no-cache, must-revalidate,post-check=0,pre-check=0,private');
header('Pragma:no-cache');
header('Expires: '. time()-60 ."'");


// check to see if they are authorized?
if ($_SESSION['valid'] != TRUE) {
			
			echo 'You are not authorized to be here';
			ob_end_clean(); // Empty the buffer
			header ('Location: index.php');
			exit();
			} 
			
// Set the page title and include the header file:
define('TITLE', 'Welcome');

// check to see if they have being logged for more than 100 seconds
if ((time()-$_SESSION['loggedin']) > 100) {
			
			echo 'You have being logged on too long';
			ob_end_clean(); // Empty the buffer
			header ('Location: logout.php');
			exit();
			} 
			
// Print a greeting:
print '<h2>Welcome</h2>';
print '<p>Hello, ' . $_SESSION['username'] . '!</p>';
	
// Print how long they've been logged in:
print '<p>You have been logged in for: ' . (time()-$_SESSION['loggedin']). 'seconds </p>';

//  links:
// Make a logout link:
print '<p><a href="2.php">Click here to see page 2</a></p>';
print '<p><a href="3.php">Click here to see page 3</a></p>';
print '<p><a href="logout.php">Click here to logout.</a></p>';

ob_end_flush();
	
?>