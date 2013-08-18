<?php

/*
course: 1920 Tuesday
instructor: Jason Hill
Student: Eric Brooke
Lab: 11 File 2
date: 31 Jan 2012
*/



function arrayToSelect($theArray){
/* Converts a php array elements into HTML select options in a drop down menu*/

	$theSelect = "<select name = \"mySelect\">";
	
	foreach($theArray as $element){
		$theSelect = $theSelect."<option>". $element."</option>";
	}
	
	$theSelect = $theSelect."</select>";
	
	return $theSelect;
	
	}

function censure1920($theArray){
/* Checks the array for 'studying comp1920' unsets it and changes the other elements to UPPERCASE*/


	foreach($theArray as $event){

		if ($event == "studying comp1920"){
			unset($event);
			}
		
		else{
			$my2[] = strtoupper($event);	
		}
	}

return $my2;
}

?>