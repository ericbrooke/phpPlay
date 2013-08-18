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

	<p>Choose your image</p>

<?php


function arrayToSelect($theArray){
/* Converts a php array elements into HTML select options in a drop down menu*/

	$theSelect = "<select name = \"images\">";
	
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
	
	if (file_exists("images")) {
	
		$filenames = scandir($directory);
		
		sort($filenames);
	
		foreach ($filenames as $filename){
	
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
	
			if (($filename !==".") && ($filename !=="..") && ($ext =="jpg")){
		
				$i++;
			
				$filename = pathinfo($filename , PATHINFO_FILENAME); // just keep the actual filename and drop the extension
			
				$list[$i] = $filename;			
			
			} //if end
			

			
		
		}//foreach

		if ($i==1) {
				echo("must have images <br/>");
				die;
			}//if
			
		return $list;
	} // if directory exists
	
	else {
	
		echo("Your images directory is missing, please create one <br/>");
		die;
		
	}//end of else
	
}//function end


$options = array();

?>

<form method="post" action="./thumbmaker.php">

<?php
echo (arrayToSelect((scanAndStrip($options,"images"))));
?>

<input type="submit" name="submit"/>
</form>

</body>
</html>