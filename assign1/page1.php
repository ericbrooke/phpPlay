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
	<title>Assignment One</title>
	<meta name="generator" content="BBEdit 10.1" />
	
	<!-- HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	
</head>
<body>

	<p>Choose your course</p>

<?php


function arrayToSelect($theArray){
/* Converts a php array elements into HTML select options in a drop down menu*/

	$theSelect = "<select name = \"course\">";
	
	foreach($theArray as $element){
		$theSelect = $theSelect."<option>". $element."</option>";
	}
	
	$theSelect = $theSelect."</select>";
	
	return $theSelect;
	
	}

function scanAndStrip($theArray,$directory){

	$filenames = array();
	$list = array();
	$i =1;
	
	if (file_exists("courses")) {
	
		$filenames = scandir($directory);
		
		sort($filenames);
	
		foreach ($filenames as $filename){
	
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
	
			if (($filename !==".") && ($filename !=="..") && ($ext =="txt")){
		
				$i++;
			
				$filename = pathinfo($filename , PATHINFO_FILENAME); // just keep the actual filename and drop the extension
			
				$list[$i] = $filename;			
			
			} //if end
			

			
		
		}//foreach

		if ($i==1) {
				echo("must create course text files, first, sorry <br/>");
				die;
			}//if
			
		return $list;
	} // if directory exists
	
	else {
	
		echo("Your course directory is missing, please create one <br/>");
		die;
		
	}//end of else
	
}//function end


$options = array();

?>

<form method="get" action="./page2.php">

<?php
echo (arrayToSelect((scanAndStrip($options,"courses"))));
?>

Username <input type="text" name="username"/>
Password <input type="password" name="password"/>

<input type="submit" name="submit"/>
</form>

</body>
</html>


