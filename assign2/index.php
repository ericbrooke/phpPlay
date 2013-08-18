<?php
ob_start();

/*
Course: 1920
Instructor: Jason Harrison
Student: Eric Brooke
Date: 28 Feb 2012
Description: Lab 19
*/
?>

<?php
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Handle the form:
	if ( (!empty($_POST['username'])) && (!empty($_POST['password'])) ) {
	
		if ( (strtolower($_POST['username']) == 'comp1920') && ($_POST['password'] == 'comp1920') ) { // Valid
	
			// Do session stuff:
			session_start();
			header('Cache-Control: no-store, no-cache, must-revalidate,post-check=0,pre-check=0,private');
			header('Pragma:no-cache');

			$_SESSION['username'] = $_POST['username'];
			$_SESSION['loggedin'] = time();
			$_SESSION['valid'] = TRUE;
			
			// Redirect the user to the welcome page
			ob_end_clean(); // Empty the buffer
			header ('Location: 1.php');
			exit();
		
		} else { // Invalid
	
			print '<p>The submitted username and password do not match those on file!<br />Go back and try again.</p>';
		
		}
	
	} else { // Forgot to fill in a field
	
		print '<p>Please make sure you enter both an username and a password!<br />Go back and try again.</p>';
		
	}

} else { // Display the form.

	print '<h2>Login Form</h2>';
	?>
	<form action="index.php" method="post">
	<p>Username: <input type="text" name="username" size="20" value="<?php if (isset($_POST['username'])) { print htmlspecialchars($_POST['username']); } ?>"/></p>
	<p>Password: <input type="password" name="password" size="20" value="<?php if (isset($_POST['password'])) { print htmlspecialchars($_POST['password']); } ?>"/></p>
	<p><input type="submit" name="submit" value="Log In!" /></p>
	</form>
	<?php
}

ob_end_flush();

?>