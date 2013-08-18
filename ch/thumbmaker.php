<?php
	
	$image = $_POST['images'];
	
	$bigpath = "images/".$image.".jpg";
	
	$thumbpath = "thumbs/".$image.".jpg";
	
	$src_img = imagecreatefromjpeg($bigpath); 

// 

	if((imagesy($src_img)) > (imagesx($src_img))){
		// tall
		$height = 125;
		$width  = round(125 * (imagesx($src_img)) / 
					(imagesy($src_img)));
	}else{
		$width = 125;
		$height = round(125 * (imagesy($src_img)) / 
					(imagesx($src_img)));
	}

	$dst_img = ImageCreateTrueColor($width, $height); 

	Imagecopyresampled($dst_img,  $src_img,
			        0,0,       0,0, 
		    $width, $height, imagesx($src_img),imagesy($src_img)); 

	Imagejpeg($dst_img, $thumbpath, 100); 
	
	imagedestroy($src_img);
	
	imagedestroy($dst_img);
///

 
?>