<!DOCTYPE html>

<!--
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 7 Feb 2012
Description: Lab 13
-->

<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Lab 13</title>
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

	<p>From text file to table</p>

<?php


	$fileContentsArray = file('brooke_eric_lab13.txt');
	
	
	echo ("<table>");
	
	foreach ($fileContentsArray as $element){	
		
		$one_persons_data = preg_split("/,/",$element);	
		
		$rowConstruct ="";
		
		for ($i=0;$i <count($one_persons_data);$i++) {
			
			$rowConstruct = $rowConstruct. "<td>".$one_persons_data[$i]."</td>";
			
		}//for
		
		$rowConstruct  = "<tr>".$rowConstruct."</tr>";
		
		echo $rowConstruct;	
		
	} //foreach
			
	echo ("</table>");	
						
?>


</body>
</html>


