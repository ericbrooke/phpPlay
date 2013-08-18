<?php 
/*
course: 1920
instructor: Jason Hill
student: Eric Brooke
date: 30 Jan 2012

*/

// Check file working

echo("Hello <br />");

//Type last name

if ($_POST["last"] =="") {
	echo("Please type a last name <br />");
	break;
	}

//Valid password

if ($_POST["number"]=="") {
	echo("Please type a password<br />");
	break;
	}
elseif ($_POST["number"] !=="comp1920"){
	echo("Invalid password, sorry <br />");
	break;
	}
	
//check favourite sport and give link

if ($_POST["sport"]==="defendo") {

	echo('<a href="http://www.defendo.com"> http://www.defendo.com</a><br />');
	}
	
elseif ($_POST["sport"]==="hockey") {

	echo('<a href="http://www.nhl.com">http://www.nhl.com</a><br />');
	}

elseif ($_POST["sport"]==="soccer") {

	echo('<a href="http://www.fifa.com">http://www.fifa.com</a><br />');
	}
	
//Check junkbox

if (isset($_POST["junk"])){
	echo("Junk mail will now be sent to you in perpetuity, thank you.<br />");
	}
	
//Convert meaning of life

echo (strtoupper($_POST["meaning_of_life"]) . "<br />");

//Ocean check

if (($_POST["provinces"] == "bc") || ($_POST["provinces"] == "pei")) {
	echo("isn't the ocean wonderful?<br />");
	}

?>