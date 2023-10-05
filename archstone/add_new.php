


<?php
// include('includes/header.php');
include('includes/db.php');


$profile_pic=$_FILES["pic"]["name"];
move_uploaded_file($_FILES['pic']['tmp_name'],'images/fulls'.$filename);


$location=$_POST["location"];

$price=$_POST["price"];
$price="KSHS ".$price;

$description=$_POST["description"];
$rooms=$_POST["rooms"];

$category=$_POST["category"];

$type=$_POST["property_type"];

$q="INSERT into property(status,imgUrl,Product,Description,rooms,location,Price,Category,propertype) VALUES("Available",'$profile_pic','$location','$description','$rooms','$location','$price','$category','$type')";

$db->query($q);

$countfiles = count($_FILES['file']['name']);

for($i=0;$i<$countfiles;$i++){
    $filename = $_FILES['file']['name'][$i];
    $sql = "UPDATE property SET `".imgroom.$i.Url."`= `".$filename."` WHERE id=`".$largestNumber."` ";
    $db->query($sql);
    move_uploaded_file($_FILES['file']['tmp_name'][$i],'images/fulls'.$filename);
}


?>


<!DOCTYPE html>
<html>
  <head>
  <style type="text/css">
    input:focus {
      border: 1px solid #286efa !important;
      outline-width: 0;
    }
    .add_img{
       border: 2px solid #ccc !important;
       outline-width: 2;
    }

    .add_img:hover{
      border: 2px solid #286efa !important;
    }

    input{
      border: 1px solid #ccc !important;
      outline-width: 2;
    }

    select{
      border: 1px solid #ccc !important;
      outline-width: 2;
    }

     textarea:focus {
      border: 1px solid #286efa !important;
      outline-width: 0;
    }

    textarea{
      border: 1px solid #ccc !important;
      outline-width: 2;
    }

  .image-upload > input
        {
            display: none;
         }

    .image-upload img
        {
          width: 140px;
          cursor: pointer;
        }

.img_wrapper span
{
 display:none;
 position:absolute;
 top:10px;
 left:15px;
}

.img_wrapper:hover span
{
 display:table-cell;
}

.img_wrapper span button
{
 
 background-color:#0066FF;
 border:none;
 color:white;
 font-weight:bold;
 font-size:12px;
}
  </style>
  </head>
<body>

<?php
$NextNum = mysql_query("SELECT MAX(ID) AS property_code FROM property where id not in('899','900','1000') ");
$row = mysql_fetch_array( $NextNum );
$largestNumber = $row['property_code']  + 1;
 echo '<b style="color:#000;">'.$largestNumber.'</b>';
  ?>

<form action="add_new.php" method="post" id="upload_form" enctype="multipart/form-data">
        <label for="pic">Select the image that will be used to represent the new listing:</label>
        <input type="file" id="id_pic" name="pic">
        
        <label for="location">Location:</label>
        <input type="text" id="id_location" name="location" required>

        <label for="rooms">Number of rooms:</label>
        <input type="number" id="id_rooms" name="rooms">

        <label for="price">Price in Kenya Shillings:</label>
        <input type="number" id="id_price" name="price">

        <label for=Category">Choose the category of the property type:</label>
        <select name="category" id="id_category">
    <option value="Rental">Rental</option>
    <option value="Standalone">Standalone</option>
    <option value="For sale">For sale</option>
  </select>

  <label for="id_property_type">Choose the property type :</label>

<select name="property_type" id="id_property_type">
    <option value="house">House</option>
    <option value="Apartment">Apartment</option>
    <option value="Town House">Town House</option>
    <option value="Ambassadorial">Ambassadorial</option>
    <option value="Outhouse">Outhouse</option>
    <option value="Gated Community">Gated Community</option>
</select>

<textarea rows="4" cols="50" name="description" form="upload_form">

<input type="file" name="file[]" id="id_images" multiple>


<input type='submit' name='submit' value='Add Listing'>
</form>
</body>
</html>
