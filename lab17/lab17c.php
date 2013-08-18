<?php
if(isset($_COOKIE["visit"])) {

	setcookie("visit","",-1,"","",0);
	echo("Cookie deleted");
	}
else {
	echo("No cookie found");
	}
		
echo ('<a href="lab17a.php">Go back</a>');	
?>
