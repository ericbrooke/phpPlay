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

/*
Course: 1920 tuesday DTC
Instructor: Jason Harrison
Student: Eric Brooke
Date: 16 Feb 2012
Description: Assignment One
*/

require_once('page4.php');

function writeError($string,$error){
// function to write errors to external file

	$date = date('F j, Y (g:i:s a)');
	$handle = fopen("./courses/errors.log","a") or die("error opening file<br />");
	fwrite ($handle, $date."\n");
	fwrite($handle, $error." - ");
	fwrite($handle, $string."\n");
	fwrite($handle,"----\n");
	fclose($handle) or die("error closing file<br />");
}

// Check filename is set
if (isset($_GET['filename'])){
	$filename = $_GET['filename'];
	}
else {
		echo("must specify a file, sorry");
		die;
	}
	
//check if file exists
if (!(file_exists($filename))){
	echo("No such file, sorry");
	die;
}

//check to see if file is empty
if ( 0 == filesize( $filename)){

	echo("File is empty");
	die;
}

$students= file($filename);

sort($students);


$error =0;

foreach ($students as $student){

	$one_persons_data = preg_split("/,/",$student);	

	//check valid A numbers
	
	if	(!(isStudentNumberWellFormed($one_persons_data[0]))){
	
		writeError($student,"Improper student number");
		$error = $error +1;
	}
	
	//check valid email 
	
	if	(!(isEmailAddressWellFormed($one_persons_data[3]))){

		writeError($student,"Improper Email address");
		$error = $error +1;
	}
	
} //foreach end

	// if errors give summary and access to view errors
	if ($error >0){
	
		echo ($error." - error(s) were found in ".$filename."<br />");
		echo ('<a href="./courses/errors.log">Examine error log</a><br />');
	}
	
	else {
	
		echo('All data is fine.<br />');
		

	//print out data 
	
		echo($filename ." is well formed.<br />");
		
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
		
		}
		
		echo('<a href="page1.php">Choose another course</a><br /><br />');
?>

</body>
</html>