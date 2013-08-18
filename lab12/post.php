<?php

/*
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 7 Feb 2012
Description: Lab 12
*/

	$date_time = date("F d, Y G:i:s");
	$posting = $_POST['post'];
	
	$file = fopen("messageboard.txt","a+") or die ("Error opening file <br />");
	
	fwrite($file,"\n -----");
	
	fwrite($file,"\n $date_time");
	
	fwrite($file, "\n".$posting."\n");
	
	fclose($file) or die ("Error closing file <br />");
	
	echo("Awesome work for writing a post!<br />");
	
	echo ('<a href="read_post.html">back to the menu</a>')
	
?>