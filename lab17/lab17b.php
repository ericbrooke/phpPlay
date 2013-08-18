<?php
if(!(isset($_COOKIE["visit"]))) {

	if( ($_POST['firstname'] =="") || ($_POST['lastname'] =="") ){
		echo("Please press the browser back button and ensure both names are filled out.");
		die;
		}
	
	 if(!(isset($_POST['colour']))) {
	
		$string = $_POST['firstname'].",".$_POST['lastname'].","."white";
		setcookie("visit",$string,(time()+(60)),"","",0);
		echo ("Hello ".$_POST['firstname']." ".$_POST['lastname'] );
		}
	else {
	
		$string = $_POST['firstname'].",".$_POST['lastname'].",".$_POST['colour'];
		setcookie("visit",$string,(time()+(60)),"","",0);
		
	
		$color = $_POST['colour'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		echo("<body bgcolor=\"$color\">");
		echo("Hello ".$firstname." ".$lastname."<br />");
		echo ("Your Name and Colour preference is stored.<br />");
		
		}
	
	}
else {
		echo("Cookie already set");
		}
		
echo ('<a href="lab17a.php">Go back</a>');	

?>



