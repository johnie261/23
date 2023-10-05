<?php
$target_dir = "img_uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if(!mysql_connect('localhost','u1167423_arch','GalaxyUniverse12'))
{
     die('Oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db('db1167423_archstonedb'))
{
     die('Oops database selection problem ! --> '.mysql_error());
} 


$description=$_GET['description'];
$rooms=$_GET['rooms'];
$location=$_GET['description'];
$price=$_GET['price'];
$description=$_GET['description'];
$description=$_GET['description'];
$q=mysql_query("SELECT MAX(ID) AS property_code FROM property where id not in('899','900','1000') ");


?>