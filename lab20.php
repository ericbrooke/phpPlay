<?php

/*
course: 1920 Tuesday
instructor: Jason Harrison
Student: Eric Brooke
Lab: 20 
date: 2 March 2012
*/

$myArcImage = ImageCreateTrueColor(400, 200);

$red    = ImageColorAllocate($myArcImage, 255, 0, 0);
$green  = ImageColorAllocate($myArcImage, 0, 255, 0);
$blue   = ImageColorAllocate($myArcImage, 0, 0, 255);
$yellow = ImageColorAllocate($myArcImage, 255, 255, 0);
$orange = ImageColorAllocate($myArcImage, 255, 165, 0);
$white 	= ImageColorAllocate($myArcImage, 255, 255, 255);

ImageFill($myArcImage, 0, 0, $white);

imageFilledArc($myArcImage, 200, 200, 400, 400, 180, 0, $blue, IMG_ARC_PIE);

imageFilledArc($myArcImage, 200, 200, 350, 350, 180, 0, $red, IMG_ARC_PIE);

imageFilledArc($myArcImage, 200, 200, 300, 300, 180, 0, $green, IMG_ARC_PIE);

imageFilledArc($myArcImage, 200, 200, 250, 250, 180, 0, $orange, IMG_ARC_PIE);

imageFilledArc($myArcImage, 200, 200, 200, 200, 180, 0, $white, IMG_ARC_PIE);

ImagePNG($myArcImage,"arc.png",9);

echo '<img src="arc.png" />';

echo '<p>Creating a rainbow using PHP and GD graphics library.</p>';

?> 


