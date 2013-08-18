<!DOCTYPE html>

<!--
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 10 Feb 2012
Description: Assignment One
-->

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title></title>
	<meta name="generator" content="BBEdit 10.1" />
	
	<!-- HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<style type="text/css">	
	
		table {
			width: 40px;
			margin: 0 auto;
			}
			
		td {
		padding: 5px;
		border: 1px solid #ccc;
		}
		
	</style>
	
</head>
<body>


<?php

	$username = $_GET["username"];
	$password = $_GET["password"];
	$course = $_GET["course"];
	
	echo ($course."<br/>");
	
	if (($username !== "comp1920") || ($password !=="php")){
	
		echo("username/password combination is not correct, sorry");
		die;
	}
	
	$filepath = "courses/".$course.".txt";
	$students= file($filepath);

	
	echo ("<table>");
	
	foreach ($students as $student){	
		
		$one_persons_data = preg_split("/,/",$student);	

		for ($i=0;$i <3;$i++) {
			
			$one_persons_data[$i] = ucfirst($one_persons_data[$i]);
			
		}//for		
		
		$one_persons_data[3] = strtolower($one_persons_data[3]);
		
		$rowConstruct ="";
		
		for ($i=0;$i <count($one_persons_data);$i++) {
			
			$rowConstruct = $rowConstruct. "<td>".$one_persons_data[$i]."</td>";
			
		}//for
		
		$rowConstruct  = "<tr>".$rowConstruct."</tr>";
		
		echo $rowConstruct;	
		
	} //foreach
			
	echo ("</table>");	
	
	
	echo ("<p>Which path will you take?</p>");
	
	echo('<a href="page1.php">Choose another course</a><br /><br />');
	echo('<a href="page3.php?filename='.urlencode($filepath).'">Work with this course file</a>');
		
?>

</body>
</html>