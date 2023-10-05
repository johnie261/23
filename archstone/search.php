<?php include('includes/header.php'); ?>
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
			<div class="row">
			<?php    
        //$filter = isset($_POST['filter']) ? $_POST['filter'] : '';

        if(isset($_POST['filter']))
        {
          $filter = $_POST['filter'];
          $result = mysql_query("SELECT * FROM property where status='Available' AND location like '%$filter%' ORDER BY  indexp  DESC ");
        ?>
<br><br><br><br><br><br>
        <div class="result_count" style="width: 100%; height: 25px; border-bottom: 4px solid #377386;; text-align: center ">
          <span style="background-color:#fff; color:teal; font-size:30px; padding: 0 20px; ">Search result(s) of <?php echo $filter ?> <?php echo mysql_num_rows($result) ?> </span>
        </div>
        <?php            
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

          $result = mysql_query("SELECT * FROM property where status='Available'   ORDER BY  indexp, idexL  DESC LIMIT $page1,9 ");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div style="padding-top:40px;">
              <div class="single-products" >
              <div class="productinfo text-center" >
              <h6><b style="text-align:center; color:#377386; font-weight:bolder; font-size:14px;">'.$row['location'].' <b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>
            <div class="img_wrap ">
            <a class="img_wrap" href="details?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-responsive img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="370" height="250" /></a>
                    </a><b class="img_description"><br><br><br><br> <br><br><a href="details.php?prodid='.$prodID.'" class="btn btn-default " style="background-color:rgb(55, 115, 134); color:white;fot-weight:600;" target="_blank"></i>More Details</a><br><br><br><br><b class="price">Price:</b><b style="color:rgb(55, 115, 134);">'  .$row['Price'].'</b></b>
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