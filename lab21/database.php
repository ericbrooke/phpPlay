<!--
course: 1920 Tuesday
instructor: Jason Harrison
Student: Eric Brooke
Lab: 21
date: 19 March 2012
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Untitled</title>
	<meta name="generator" content="BBEdit 10.1" />
	<style type="text/css">
	
		body { font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;}
		table {border-collapse:collapse;}
		table, td { border: 1px solid black;}
		td { padding: 5px;}			
		#head { font-weight: bold; }
		
	</style>
	
</head>
<body>


<?php

//get data from post form
$title = $_POST['title'];
$firstname = ucfirst($_POST['firstname']);
$lastname = ucfirst($_POST['lastname']);
$describe = $_POST['describe'];

//setup database
$mysql_host = "mysql14.000webhost.com";
$mysql_database = "a6519068_1920";
$mysql_user = "a6519068_guru";
$mysql_password = "chickenfarm2012";
$dbc = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database) or die ('Could not connect '.mysql_error());

//Insert data from form
$query1 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('$title','$firstname','$lastname','$describe')";
$result1 = mysqli_query($dbc,$query1) or die ('could not insert 1');


//get data for table
$query2 ="SELECT 	id AS 'PRODUCT ID', 
					title AS 'Title', 
					CONCAT(authorFirstName,' ',authorLastName), 
					description AS 'Description' 
					FROM books;";
					
$result2 = mysqli_query($dbc,$query2) or die ('could get table to display'); 

//display the table

echo '<table>';

//add table header

echo "<tr id='head'><td>Product ID</td><td>Title</td><td>Author</td><td>Description</td></tr>";

while ($book = mysqli_fetch_row($result2)) {

	echo '<tr>';

	foreach($book as $field) {
		echo "<td>$field</td>";
	}
	
	echo '</tr>';
}

echo '</table>';

//close

mysqli_close($dbc);

?>

</body>
</html>