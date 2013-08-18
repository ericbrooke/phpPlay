<?php

/*
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 28 Feb 2012
Description: Lab 19
*/

/* This is the logout page. It destroys the session information. */

ob_start();

// Need the session:
session_start();
header('Cache-Control: no-store, no-cache, must-revalidate,post-check=0,pre-check=0,private');
header('Pragma:no-cache');

$_SESSION['valid'] = FALSE;

		
// Delete the session variable:
unset($_SESSION);

// Reset the session array:
$_SESSION = array();

if(isset($_COOKIE[session_name()])) {
	setcookie(session_name(),'',time()-42000,'/');
	}
	
session_destroy();
	

// Define a page title and include the header:
define('TITLE', 'Logout');

echo '<p>You are now logged out.</p>';
echo '<p>Thank you for using this site.</p>';

print '<p><a href="index.php">Want to log back in?</a></p>';

ob_end_flush();

?>



