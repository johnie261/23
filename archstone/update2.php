<?php 
include('includes/db.php'); 
$Description = $Location = $Price = $Pro_ID = "";

function redirect($location){
  return header("Location: {$location}");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $Description = $_POST['description']; 
    $Location = $_POST['location'];
    $Price = $_POST['price'];
    $Pro_ID = $_POST['Pro_ID'];
    $status = $_POST['status'];

    $sql = mysql_query("UPDATE sale SET Description ='".$Description."', location ='".$Location."', Price ='".$Price."', Product ='".$Location."', status = '".$status."'   WHERE ID ='".$Pro_ID."'");
    
    if($sql){  
        redirect("http://properties.archstonekenya.com/saleDetails.php?prodid=".$Pro_ID);
      }
     
      }