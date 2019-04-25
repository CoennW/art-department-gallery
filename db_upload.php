<?php 
include("db_connect.php");

$artist = $_POST['artist'];
$name_artwork = $_POST['name_artwork'];
$instagram = $_POST['instagram'];

$imageName = $_FILES['pictures']['name'];
echo $imageName;
$path = "uploads/" . $_POST['name_artwork'] . "." . pathinfo($imageName, PATHINFO_EXTENSION);


//insert form data into database for vaildation 
$sql = "INSERT INTO uploaded_art (artist, name_artwork, instagram, path)
VALUES ('$artist', '$name_artwork', '$instagram', '$path')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



//upload picture to server awaiting validation 
require_once  "bulletproof.php";

$image = new Bulletproof\Image($_FILES);

$image->setLocation("uploads")
      ->setName($_POST['name_artwork'])
      ->setMime(array('jpeg', 'jpg'));

if($image["pictures"]){
  $upload = $image->upload(); 

  if($upload){
    echo $upload->getFullPath(); 
  }else{
    echo $image->getError(); 
  }
}

include("db_closeCon.php");
?>