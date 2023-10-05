<?php include('includes/header.php'); ?>

  
   <?php
         $ipaddress = $_SERVER['REMOTE_ADDR'];
         $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
         $referrer = $_SERVER['HTTP_REFERER'];
         $datetime = date("F j, Y, g:i a");
         $useragent = $_SERVER['HTTP_USER_AGENT'];

         $host="10.16.112.80";
         $username="u1167423_arch";
         $password="bvo}BQ2_7dI<HY9s";
         $databasename="db1167423_archstonedb";
         $connect=mysql_connect($host,$username,$password);
         $db=mysql_select_db($databasename);
         
         mysql_query("insert into visitor_details values('$ipaddress','$page','$referrer','$datetime','$useragent')"); 
    ?>

    <style type="text/css">
      .dominate{
        position:relative;
        z-index:100000;
        padding-top:350px;
      }
    </style>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" style="height:420px; font-style:normal;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

        <?php
      $sql = mysql_query("SELECT * FROM images ORDER BY   RAND()");
            $row = mysql_fetch_array($sql);
             ?>

          <div class="carousel-item active" style="height:520px;">
            <div class="carousel-background fadeIn"><?php echo '<img class="img-responsive" src="img/intro-carousel/'.$row['bg_image'].'" alt="">'; ?></div>
            <div class="carousel-container">
              <div class="carousel-content"><br><br>
                <h2 width="550px" height="150px"></h2>
                
                <a href="homes.php" class="btn-get-started scrollto">Properties To Let</a>
              </div>
            </div>
            <div id="exTab1" class="container dominate" style=""> 
              <?php include('test.php'); ?>
            </div>
          </div>

     

          <div class="carousel-item" style="height:520px;">
            <div class="carousel-background"><img class="img-responsive" src="img/intro-carousel/5-min.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content"><br><br>
               <h2></h2>
             
                <a href="sale.php" class="btn-get-started scrollto">Properties For Sale</a>
              </div>
            </div>
             <div id="exTab1" class="container dominate" style=""> 
              <?php include('test.php'); ?>
            </div>
          </div>

          <div class="carousel-item" style="height:520px;">
            <div class="carousel-background"><img class="img-responsive" src="img/intro-carousel/2-min.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content"><br><br>
                <h2></h2>
               
                <a href="holidayhomes.php" class="btn-get-started scrollto">Holiday Homes</a>
              </div>
            </div>
             <div id="exTab1" class="container dominate" style=""> 
              <?php include('test.php'); ?>
            </div>
          </div>

          <div class="carousel-item" style="height:520px;">
            <div class="carousel-background"><img class="img-responsive" src="img/intro-carousel/6-min.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content"><br><br>
               <h2></h2>
                
                <a href="about.php" class="btn-get-started scrollto">About Us</a>
              </div>
            </div>
             <div id="exTab1" class="container dominate" style=""> 
              <?php include('test.php'); ?>
            </div>
          </div>

          <div class="carousel-item" style="height:520px;">
            <div class="carousel-background"><img class="img-responsive" src="img/intro-carousel/7-min.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content"><br><br>
                <h2></h2>
             
                <a href="contact.php" class="btn-get-started scrollto">Contact Us</a>
              </div>
            </div>
             <div id="exTab1" class="container dominate" style=""> 
              <?php include('test.php'); ?>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
  

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">

          <header class="section-header" style="text-align:center;"><br>
          <h4>FEATURED PROPERTIES</h4>
        </header>
         <div class="owl-carousel">

        <?php       
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

          $result = mysql_query("SELECT * FROM property where id not in('1000', '139','138','136','165') and status ='Available'  ORDER BY   RAND() LIMIT 6");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];

          echo'<div class="item">
              <div style="text-align:center; color:#377386; font-weight:bolder;">
              <b>'.$row['location'].'</b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>
              </div>
              
                <a class="popup"href="http://archstonekenya.com/details?prodid='.$prodID.'"><img class="img-responsive" class="img-fluid" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'""><a href="details?prodid='.$prodID.'" class="btn btn-default " style="background-color:rgba(0, 30, 34, 0.85); color:white;" target="_blank"></i>More Details</a></a>
              </div>';
           }
              }
         ?>
             
             
            </div><br><br><br>

          <div class="container">
            <div class="row">
              <div class="col-md-8" style="padding: 0px; margin: 0px; background-color: rgb(255, 255, 255); font-family: arial, helvetica, sans-serif, verdana, "Open Sans";">
           
              <p style="text-align:left; background-color:#d9edf7; width:100%;   padding:10px; font-size:16px; color:#555;  font-family: sans-serif;">
          <b style=" font-weight:bolder; color:#377386;  text-align:center;  font-family: sans-serif; font-size:20px;">Don't Become a Victim of a Bad Deal - Get Real Value</b><br>
            Kenya is ranked 124th in the corruption standings out of 154 countries in the world. That statement says a lot about the people and whether they can be easily “trusted”, more so in property and financial matters. Regrettably, this bad trait which has led Kenyans’ to become unethical, isn’t visible on face of every ordinary Kenyan, especially when dealing in property or real estate. Many neglect the property’s bill of health, the law, phony agents, promised amenities and cheating comes easy amongst a growing list of ills’.<br><br>

            Archstone Kenya prides itself in being different from the rest. Our aim is to ensure you deserve trust, confidence and honesty in all aspects. Besides our phenomenal knowledge of this market place, we comprehend your needs far better than our competition. An Archstone client, will never become a victim of a shoddy deal, a bad property or rental investment or a fraudster. The reason we came in to existence.<br><br>

            All properties, for sale or rent are thoroughly assessed. Our competitors will not invest half the time or money in the aspects we delve into, driven by hungry corporate desires to meet targets and grow profits.<br><br>

            Archstone Kenya wants you as a client for a lifetime. We go beyond personalized attention and service. Archstone specializes in a niche of clients who let us handle their needs as they continue with their normal lives. We focus on specific property sectors, making us ‘the’ experts in housing and residential properties in Blue and Green zones. <b>Nevertheless we specialize in providing housing for Diplomats and Embassies and now trying to stretch our business to Multinationals and NGO’s in Kenya.</b><br><br>

            It is our hope that you will award us with an opportunity to serve you and experience the service value that all desire but less deliver.

          </p>
            </div>

           <div class="col-md-4">
              <div style="text-align:center;"><br>
            <iframe src="tweet.php" style="width:110%; " height="300px;"></iframe>
            </div>
           </div>
          </div>
         </div>
        </header>

        <div class="row about-cols">

          <div class="container">
 
<p style="font-size:25px; font-weight:bolder; padding-left:15px; color:#000; text-align:left;">Featured Listings</p>
<p> 
  <ul  class="nav nav-pills" style="padding-left:14px;">
      <li class="active">
        <a  href="#1a" data-toggle="tab" id="navpil" style="background-color:#377386; color: #fff; padding:8px; border-radius:5px;">To let</a>
      </li>

      <li><a href="#2a" data-toggle="tab" id="navpil" style="background-color:#377386; color: #fff; padding:8px; border-radius:5px">For sale</a>
      </li>
    </ul>
    <br>
      <div class="tab-content clearfix">
        <div class="tab-pane active" id="1a">
     <div class="container-fluid" style="color:#000; ">
    <div class="row">
      <div class="col-lg-12">

        <div style="width: 100%; height: 22px; border-bottom: 2px solid #377386;; text-align: center ">
           <span style="font-size:23px; font-weight:bolder; background-color: #fff; padding: 0 20px; color:#377386;">
           To Let
              </span>
            </div>
        <hr></hr>
        <div class="row" style="font-size:15px; font-style:normal;">


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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable'  ORDER BY  RAND() LIMIT $page1,6");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];

             echo'<div class="col-lg-4">
                <div class="icon">
                <b>ID:</b><b style="color:#000000;">'.$prodID.'</b>
                <p><a  href="http://archstonekenya.com/details?prodid='.$prodID.'"><img class="img-responsive" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" width="340px" height="220px"/></a></p>
                <div style="box-shadow: 1px 2px 1px  #A9A9A9;">
                  <p style="text-align:center; color:#377386; font-weight:bolder;">'.$row['location'].'<br>To Let:'.$row['location'].'</p>
                
                </div>
 
                 
              
                  </div>
                  </div>
            ';
                }
              }

                   ?>


                  </div>

              </div>
            
              <div>
                  </div>
              </div>
              <div style="text-align: center;">
            <a href="homes" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold;  " target="_blank"></i>View All</a>
            </div>
            </div>
          </p>

        </div>
        <div class="tab-pane" id="2a" >

           <div style="width: 100%; height: 22px; border-bottom: 2px solid #377386;; text-align: center ">
           <span style="font-size:23px; font-weight:bolder; background-color: #fff; padding: 0 20px; color:#377386;">
              For Sale
              </span>
            </div>
           
           <hr></hr>
          <div class="container-fluid" style="color:#000;">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
        
        
              

  
               <div class="col-lg-4">
                <div class="icon">
                <p  data-toggle="modal" data-target="#myModa29" style="cursor:pointer;"><img class="img-responsive" src="images/fulls/rosslyn springs1.png " hei/></p>
                  <div style="box-shadow: 1px 2px 1px  #A9A9A9;">
                  <p style="text-align:center; color:#377386; font-weight:bolder;">Rosslyn<br>8 units  <br>For sale:KSH 75 million</p>
            
                  </div>
  
                 
              
                  </div>
              </div>
               

              <div>
                  </div>
              </div>
            </div>
            <div style="text-align: center;">
            <a href="sale.php" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View All</a>
            </div>
        </div>
      </div>
      <hr></hr>
  </div>
</div>
</div>
</div>


      </div>

    </section><!-- #about -->


    </main>

  <!--==========================
    Footer
  ============================-->
  
    <?php include('includes/footer.php'); ?>