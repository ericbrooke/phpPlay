
<?php

/*
course: 1920 Tuesday
instructor: Jason Harrison
Student: Eric Brooke
Lab: 21
date: 19 March 2012
*/

$mysql_host = "mysql14.000webhost.com";
$mysql_database = "a6519068_1920";
$mysql_user = "a6519068_guru";
$mysql_password = "chickenfarm2012";


$dbc = mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_database) or die ('Could not connect '.mysql_error());


$query = "DROP TABLE IF EXISTS books;";
$result = mysqli_query($dbc,$query) or die ('could not delete existing table send ');


$query1 = "CREATE TABLE IF NOT EXISTS books(
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
title VARCHAR(60),
authorLastName VARCHAR(30),
authorFirstName VARCHAR (30),
description TEXT);";
$result = mysqli_query($dbc,$query1) or die ('could send not create table '.mysql_error());

$query2 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('The Clean Coder','Robert','Martin','This book is packed with practical advice-about everything from estimating and coding to refactoring and testing.')";
$result = mysqli_query($dbc,$query2) or die ('could not insert 1');

$query3 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('The Business Model Generation','Alexander','Osterwalder', 'It explains the most common Business Model patterns, based on concepts from leading business thinkers, and helps you reinterpret them for your own context. You will learn how to systematically understand, design, and implement a game-changing business model--or analyze and renovate an old one. Along the way, youll understand at a much deeper level your customers, distribution channels, partners, revenue streams, costs, and your core value proposition.')";
$result = mysqli_query($dbc,$query3) or die ('could not insert 2'.mysql_error());

$query4 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('The New Drawing on the Right Side of the Brain','Betty','Edwards', 'Over the last decade, Dr. Edwards has refined her material through teaching hundreds of workshops and seminars. Truly The New Drawing on the Right Side of the Brain, this edition includes: -- the very latest developments in brain research, -- new material on using drawing techniques in the corporate world and in education, -- instruction on self-expression through drawing, -- an updated section on using color, and -- detailed information on using the five basic skills of drawing for problem solving.')";
$result = mysqli_query($dbc,$query4) or die ('could not insert 3'.mysql_error());

$query5 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('Enders Game','Orson','Scott Card', 'Ender Wiggin is a very bright young boy with a powerful skill. One of a group of children bred to be military geniuses and save Earth from an inevitable attack by aliens, known here as -buggers- Ender becomes unbeatable in war games and seems poised to lead Earth to triumph over the buggers. Meanwhile, his brother and sister plot to wrest power from Ender.')";
$result = mysqli_query($dbc,$query5) or die ('could not insert 4'.mysql_error());

$query6 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('Bubbys Homemade Pies','Ronald','Silver','The best pie book')";
$result = mysqli_query($dbc,$query6) or die ('could not insert 5'.mysql_error());

$query7 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('The New Leaders','Daniel','Goleman', 'As business reinvents itself at broadband speed, what makes leaders effective has inevitably been transformed. Old assumptions and old modes no longer hold; a new style of leadership that works has emerged amidst the chaos of change. This new leader excels in the art of relationship, the singular expertise which the changing business climate renders indispensable. Excellence is being defined in interpersonal terms as companies have stripped out layers of managers, as corporations merge across national boundaries, and as customers and suppliers redefine the web of connection. Bestselling author Daniel Goleman argues that emotionally intelligent leaders are now must-haves for business today. But many readers have been left with, So now what do I do? The New Leaders answers that question by laying out the map for transforming leadership in individuals, in teams and organisations.')";
$result = mysqli_query($dbc,$query7) or die ('could not insert 6'.mysql_error());

$query8 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('Do More Faster: Techstars Lessons to Accelerate Your Startup','Brad','Feld', 'his book is packed with practical advice-about everything from estimating and coding to refactoring and testing. It covers much more than technique: It is about attitude. Martin shows how to approach software development with honor, self-respect, and pride; work well and work clean; communicate and estimate faithfully; face difficult decisions with clarity and honesty; and understand that deep knowledge comes with a responsibility to act. Readers will learn: >What it means to behave as a true software craftsman. How to deal with conflict, tight schedules, and unreasonable managers.  How to get into the flow of coding, and get past writers block.  How to handle unrelenting pressure and avoid burnout. How to combine enduring attitudes with new development paradigms. How to manage your time, and avoid blind alleys, marshes, bogs, and swamps. How to foster environments where programmers and teams can thrive. When to say No-and how to say it. When to say Yes-and what yes really means.  Great software is something to marvel at: powerful, elegant, functional, a pleasure to work with as both a developer and as a user. Great software isnt written by machines. It is written by professionals with an unshakable commitment to craftsmanship.')";
$result = mysqli_query($dbc,$query8) or die ('could not insert 7'.mysql_error());

$query9 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('Steve Jobs','Walter','Isaacson', 'Based on more than forty interviews with Jobs conducted over two years--as well as interviews with more than a hundred family members, friends, adversaries, competitors, and colleagues--Walter Isaacson has written a riveting story of the roller-coaster life and searingly intense personality of a creative entrepreneur whose passion for perfection and ferocious drive revolutionized six industries: personal computers, animated movies, music, phones, tablet computing, and digital publishing. ')";
$result = mysqli_query($dbc,$query9) or die ('could not insert 8'.mysql_error());

$query10 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('Homicidal Psycho Jungle Cat: A Calvin and Hobbes Collection','Bill','Watterson', 'Calvin and Hobbes are two of the most hysterical dynamic duo I have seen. The two, a tiger(Hobbes) and 6 year-old superhero(Calvin aka Spaceman Spiff or Stupendous Man) put together a hilarios story, fighting ways of unspeakable evil such as early bedtimes, resricted TV access, Mom Lady(Stupendoes Mans archnemisis), baby sitters, and baths, these two are so funny you will never be able to put the book down.')";
$result = mysqli_query($dbc,$query10) or die ('could not insert 9'.mysql_error());

$query11 = "INSERT INTO books (title, authorFirstName, authorLastName, description) VALUES('Thinking Fast and Slow','Daniel','Kahneman', 'A  tour of the mind and explains the two systems that drive the way we think. System 1 is fast, intuitive, and emotional; System 2 is slower, more deliberative, and more logical. Kahneman exposes the extraordinary capabilities—and also the faults and biases—of fast thinking, and reveals the pervasive influence of intuitive impressions on our thoughts and behavior. The impact of loss aversion and overconfidence on corporate strategies, the difficulties of predicting what will make us happy in the future, the challenges of properly framing risks at work and at home, the profound effect of cognitive biases on everything from playing the stock market to planning the next vacation—each of these can be understood only by knowing how the two systems work together to shape our judgments and decisions. ')";
$result = mysqli_query($dbc,$query11) or die ('could not insert 10'.mysql_error());

//close
mysqli_close($dbc);

?>

<form method="post" action="database.php">
	<label for="title">Book Title: </label></td>
	<input type="text" size="50" name="title" id="title" />
	<br />
	
	<label for="firstname">Author First name: </label>
	<input type="text" size="50" name="firstname" id="firstname" value="<?php echo $firstname; ?>" />
	<br />
	
	<label for="lastname">Author Last name: </label>
	<input type="text" size="50" name="lastname" id="lastname" value="<?php echo $lastname; ?>"/>
	<br />
	
	<label for="describe">Description</label>
	<textarea rows="2" cols="46" name="describe" id="describe"></textarea>
	<br />
	
	<input type="submit" name="submit" value="Submit" />
			
</form>	