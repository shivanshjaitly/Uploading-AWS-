<?php
$filename = $_FiLES['imagefile']['name'];

$location = "upload/".$filename;
$uploadOk = 1;

 $imageFileType = pathinfo($location ,PATHINFO_EXTENSION);
 
 $valid_extensions = array('jpg' , "jpeg" , 'png');

 if (!in_array(strtlower($imageFileType), $valid_extensions)) {
     $uploadOk = 0;
     
 }
if ($uploadOk==0) {
 echo 0;
}
else{
    if (move_upload_file($_FiLES['imagefile']['tmp_name'],$location)) {
        echo $location;
    }
    else{
        echo 0;
    }
}
