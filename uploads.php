<?php

include 'ImageResize.php';
use \Gumlet\ImageResize;
 
 if (isset($_POST['submit'])) {
 	$filename = $_FILES['filetoupload']['name'];
 	$tem_name = $_FILES['filetoupload']['tmp_name'];
 	$filesize = $_FILES['filetoupload']['size'];
 	$uploaddir = 'uploads/';
 	$targetfile = $uploaddir.$filename;
 	$resizeimage = $uploaddir.'resize_'.$filename;


 		if ($filesize>0) {
 			if (move_uploaded_file($tem_name, $targetfile)){

 				$image = new ImageResize($targetfile);
				$image->scale(66);
				$image->save($resizeimage);

 				echo 'Zdjecie załadowane poprawnie';
 			}

 	}

 }





?>