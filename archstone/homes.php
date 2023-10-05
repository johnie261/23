<meta name="viewport" content="width=device-width, initial-scale=1.0">


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

        
   </style>
   <?php include('includes/header.php'); ?>
    <div class="container"><br><br><br><br>

      <div style="width: 100%; height: 48px; border-bottom: 4px solid #377386;; text-align: center ">
          <span style="font-size: 40px; background-color: #fff; padding: 0 20px; color:#377386;">
           <img src="img/coollogo_com-145331123.jpg">
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable'  ORDER BY  indexp DESC LIMIT $page1,9 ");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div style="padding-top:40px;">
              <div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a><b class="img_description"><br><br><br><br> <br><br><a href="details.php?prodid='.$prodID.'" class="btn btn-default " style="background-color:white; color:#377386;" target="_blank"></i>More Details <br> </a><br><br><br><br><b class="price">Price:</b><b style="color:#377386;margin-top:30px">'.$row['Price'].'</b></b>

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
          <?php

            $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable'");
            $cou = mysql_num_rows($result);
            $a = $cou/9;
            $a=ceil($a);
              echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br/>";
            for ($b=1; $b<=$a ; $b++) { 

            ?>
            <a href="homes.php?page=<?php echo $b;?>" style="background-color:#377386; color:#fff; padding:8px; text-align:center; "><?php echo "\n\n".$b."";  ?></a> &nbsp;&nbsp;<?php
            }

          ?>
        </div>
        <br><br>

  <?php include('includes/footer.php'); ?>