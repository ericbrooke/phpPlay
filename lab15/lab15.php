<?php

/*
course: 1920 Tuesday
instructor: Jason Harrison
Student: Eric Brooke
Lab: Lab 15 
date: 14 Feb 2012

*/

$phone7 = $_GET["phone7"];
$phone10 = $_GET["phone10"];
$car = $_GET["car"];
$street = $_GET["street"];
$birth = $_GET["birth"];
$sin = $_GET["sin"];

// 7 digit phone Must be 3 digits (numbers) can have space or - then four digits

$pattern7Digit = "/[0-9][0-9][0-9](-|( )*)?[0-9[0-9][0-9][0-9]/";

if(preg_match($pattern7Digit, $phone7)){
	echo("Valid 7 Digit phone number<br />");
	}
else {

	echo("INValid 7 Digit phone number<br />");	
	}
	
// 10 digit phone - Must have 3 digits (can be surround with brackets or can have a dash and a space) three digits, dash or 		space than the final four digits

$pattern10Digit = "/(\()?[0-9][0-9][0-9](\))?(-|( )*)?[0-9][0-9][0-9](-|( )*)?[0-9][0-9][0-9][0-9]/";  // (\()? 

if(preg_match($pattern10Digit,$phone10)){
	echo("Valid 10 Digit phone number<br />");
	}
else {

	echo("INValid 10 Digit phone number<br />");	
	}
	
//Car license plate - Must be three letter and then three digits or the reverse with digits than letters
$patternCar = "/([A-Z][A-Z][A-Z]( )?[0-9][0-9][0-9])|([0-9][0-9][0-9]( )?[A-Z][A-Z][A-Z])/";

if(preg_match($patternCar, $car)){
	echo("Valid Car license plate<br />");
	}
else {

	echo("INValid Car license plate<br />");	
	}
	
//Street address - 3-5 number address followed by a string must end with Street

$patternStreet = "/^([0-9]{3,5})(.)+(Street)$/";

if(preg_match($patternStreet, $street)){
	echo("Valid Street address <br />");
	}
else {

	echo("INValid Street address <br />");	
	}
	
//birthdate -year cannot be later than current year

$patternBirth = "/([A-Z][A-Z][A-Z])-([0-9][0-9])-(([1][0-9][0-9][0-9])|([2][0][0][0-9])|([2][0][1][0-2]))/";

if(preg_match($patternBirth, $birth)){
	echo("Valid Birthdate<br />");
	}
else {

	echo("INValid Birthdate<br />");	
	}
	
//Social Insurance number - 9 Digits may have zero or more spaces have to each set of three digits

$patternSIN = "/[0-9][0-9][0-9]( )*[0-9][0-9][0-9]( )*[0-9][0-9][0-9]( )*/";

if(preg_match($patternSIN, $sin)){
	echo("Valid Social Insurance number<br />");
	}
else {

	echo("INValid Social Insurance number<br />");	
	}
	
echo ('<a href="brooke-eric-lab15.html"> return to form</a>');
?>



