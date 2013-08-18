<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>lab17</title>
	<meta name="generator" content="BBEdit 10.1" />
</head>
<body>

<?php
	if(!(isset($_COOKIE["visit"]))){?>
		<form method="post" action="lab17b.php">

			<p> first name <input type="text" name="firstname"></p>
			<p> last name <input type="text" name="lastname"></p>

			<p> RED <input type="radio" name="colour" value="red" ></p>
			<p> BLUE <input type="radio" name="colour" value="blue" ></p>
			<p> YELLOW <input type="radio" name="colour" value="yellow" ></p>
			<p> GREEN <input type="radio" name="colour" value="green" ></p>
			<input type="submit" name="submit">
		</form>
	<?php } else {
		
		$cookie = preg_split("/,/",$_COOKIE["visit"]);
		$color = $cookie[2];
		$firstname = $cookie[0];
		$lastname = $cookie[1];
		
		
		echo("<body bgcolor=\"$color\">");
		echo("Welcome back ".$firstname." ".$lastname."<br />");
		echo('<a href="lab17c.php">let me delete cookie</a>');
		}
	?>
</body>
</html>
