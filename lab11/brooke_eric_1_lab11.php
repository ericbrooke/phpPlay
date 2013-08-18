
<?php

/*
course: 1920 Tuesday
instructor: Jason Hill
Student: Eric Brooke
Lab: 11 File 1
date: 31 Jan 2012
*/

	$my[] = "I was born";
	$my[] = "I survived 12 foster homes";
	$my[] = "We won a young enterprise competition";
	$my[] = "Went to University and got a computer science degree";
	$my[] = "Worked on a huge campaign which changed many children's' lives";
	$my[] = "I travelled around the world";
	$my[] = "I got elected to public office";
	$my[] = "I became the minister of community and culture, in Cornwall UK";
	$my[] = "Moved to Canada";
	$my[] = "studying comp1920";

//include the necessary files
require_once ("brooke_eric_lab11_2.php");

echo("Hello<br />");

$my = censure1920($my);

echo (arrayToSelect($my));
	
?>