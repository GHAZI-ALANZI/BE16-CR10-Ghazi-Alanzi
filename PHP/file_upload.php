<?php
$uploaddir = '../pic/';
$imageFileType = strtolower(pathinfo($uploaddir,PATHINFO_EXTENSION));

$uploadfile = $uploaddir . basename($_FILES['picture']['name']);
if ($_FILES["picture"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    
  }
  
echo '<pre>';
if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}



?>