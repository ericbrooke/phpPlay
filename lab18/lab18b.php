<?php
/*
course: 1920 Tuesday
instructor: Jason Harrison
Student: Eric Brooke
Lab: Lab 18 
date: 21 Feb 2012

*/
if(!(isset($_COOKIE["basher"]))) {
		// if cookie not set, set it
		setcookie("basher",0,(time()+(10*60)),"","",0);
		echo ("Steven Harper has being informed of your action<br />");
		}
	else {
	 			// flippant error message, to confirm the cookie is already set
		echo ("Your criminal record has already being updated<br />");
		}

echo ('<a href="lab18.php">Go back</a>');	

?>