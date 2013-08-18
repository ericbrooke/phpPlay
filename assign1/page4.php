<?php

/*
Course: 1920 tuesday DTC
Instructor: Jason Harrison
Student: Eric Brooke
Date: 20 Feb 2012
Description: Assignment One
*/

function isStudentNumberWellFormed($studentnumber) {

	$validA = "/^[Aa][0-9]{8}$/";
 	return preg_match($validA,$studentnumber);	
	}

function isEmailAddressWellFormed($emailaddress) {

	$validEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
	return preg_match($validEmail,$emailaddress);
	}

?>