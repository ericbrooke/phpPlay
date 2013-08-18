<?php

/*
course: 1920 Tuesday
instructor: Jason Harrison
Student: Eric Brooke
Lab: Lab 18 
date: 21 Feb 2012

*/

//check if cookie set
if (!(isset($_COOKIE["basher"]))) { ?>
 	<!--if not set then tempt them -->
	<p>Please do not click on this button. Otherwise Steve Harper will receive a rotten tomato on rotten tomato day.</p>

	<a href="lab18b.php"><img src="steve.jpg" alt="Photo of Stephen Harper" /></a>
<?php
} else {
	//if set site has being deleted
	echo("Due to your action Steve Harper has censured this website<br />");
}
?>



