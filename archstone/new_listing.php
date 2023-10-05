<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="img/title.png" type="image/gif" sizes="12x30">
  <meta charset="UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Property to let In Kenya - Rent Properties In Kenya</title>
<meta name="description" content="For all of your housing requirement’s. We give you the best in the market right from Renting, Selling and Property management.  Properties, Rent, Buy, sell Archstone Kenya where dreams come home. Buy Sell Rent property in Kenya. Find properties&#039;in kenya today."/>
<meta name="robots" content="noodp"/>
<link rel="canonical" href="http:/www.archstonekenya.com/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Archstone - Buy, Rent, Sale Properties in Kenya" />
<meta property="og:description" content="For all of your housing requirement’s. We give you the best in the market right from Renting, Selling and Property management. Buy, Rent, Sale Properties in Kenya. Archstone Kenya where dreams come home . Buy Sell Rent property in Kenya. Find properties&#039;in kenya today." />
<meta property="og:url" content="http://www.archstonekenya.com/" />
<meta property="og:site_name" content="Archstone Kenya" />
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/www.archstonekenya.com\/","name":"Properties In Kenya","potentialAction":{"@type":"SearchAction","target":"http:\/\/www.archstonekenya.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"Organization","url":"http:\/\/www.archstonekenya.com\/","sameAs":[],"@id":"#organization","name":"Properties In Kenya","logo":""}</script>

	<?php include('includes/header2.php'); ?>
	<body>

		 <style type="text/css">

        .img_wrap {
          position: relative;
          height: 250px;
          width:370px;
        }

        .img_description {
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          background: rgba(0, 0, 0, 0.72);
          color: #fff;
          visibility: hidden;
          opacity:2;

          transition: opacity .0s, visibility .0s;
        }

        .img_wrap:hover .img_description {
          visibility: visible;
          opacity:2;
        }
   </style>
		<div class="container"><br><br><br><br>

      <div style="width: 100%; height: 48px; border-bottom: 4px solid #377386;; text-align: center ">
          <span style="font-size: 40px; background-color: #fff; padding: 0 20px; color:#377386;">
           New Listing
          </span>
        </div>
      

			<div class="row">
			<?php    
        //$filter = isset($_POST['filter']) ? $_POST['filter'] : '';

        if(isset($_POST['filter']))
        {
          $filter = $_POST['filter'];
          $result = mysql_query("SELECT * FROM property where rooms like '%$filter%' or Category like '%$filter%' or location like '%$filter%' or price like '%$filter%' or propertytype like '%$filter%' ");
                    
        }
        else
        {
          $page=$_GET["page"];
          if ($page=='' || $page=='1') {
            $page1=1;
          }
          else{
            $page1=($page*9)-9;
          }

          $result = mysql_query("SELECT * FROM property where id in('900','190','189','187','186', '183', '180', '179', '95', '188', '191', '192', '122','185', '182', '181') and not status ='Unavailable'  ORDER BY  indexp, idexL  DESC LIMIT $page1,30 ");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div style="padding-top:40px;">
              <div class="single-products" >
              <div class="productinfo text-center" >
              <h6><b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b> <b>ID:</b><b style="color:#000000;">'.$prodID.'</b></h6>

            <div class="img_wrap ">
            <a class="img_wrap" href="details?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a><b class="img_description"><br><br><br><br> <br><br><a href="details.php?prodid='.$prodID.'" class="btn btn-default " style="background-color:white; color:rgba(0, 30, 34, 0.85);" target="_blank"></i>More Details</a></b>
            </div>
            
              
          </div>';    
          echo '</ul>'; 

        }
       
      }
 
    ?>

		</div>
		</div>
	</body>
   <div class="container">
         
        </div>
        <br><br>
  <?php include('includes/footer.php'); ?>