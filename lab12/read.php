<?php

/*
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 7 Feb 2012
Description: Lab 12
*/

	echo("read it baby <br />");
	
	if (file_exists("messageboard.txt")){
	
		$temp = file("messageboard.txt");
	
		foreach ($temp as $line) {
			echo nl2br("$line");
		}
	}
	
	else {
		echo("you need to write something first! <br />");
	}
	
	echo('<a href="read_post.html">back to menu</a>');
?>