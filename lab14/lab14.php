<?php

/*
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 7 Feb 2012
Description: Lab 14 
*/

$filenames = scandir('.');

	foreach($filenames as $filename)
	{

		echo("<ul>");
		
		if  (($filename !==".") && ($filename !=="..")  && ($filename !=="index.txt")) {
			
			echo "<li><a href = \"$filename\">$filename</a><br/></li>";
		}
		
		echo("</ul>");
		
	}
	 
	?>
	
	