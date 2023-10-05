<?php 
include('includes/db.php');
$sql = mysql_query("SELECT * FROM property WHERE status = 'unvailable' ");
$getProdInfo = mysql_fetch_array($sql);
    $prodimage = $getProdInfo["imgUrl"];
    $prodimage1 = $getProdInfo["imgroom1Url"];
    $prodimage2 = $getProdInfo["imgroom2Url"];
    $prodimage3 = $getProdInfo["imgroom3Url"];
    $prodimage4 = $getProdInfo["imgroom4Url"];
    $prodimage5 = $getProdInfo["imgroom5Url"];
    $prodimage6 = $getProdInfo["imgroom6Url"];
    $prodimage7 = $getProdInfo["imgroom7Url"];
    $prodimage8 = $getProdInfo["imgroom8Url"];



    if (!unlink($prodimage)) {
      echo ("$prodimage cannot be deleted due to an error");
  }
  else {
      echo ("$prodimage has been deleted");
  }

  ?>