<?php 
ob_start();
session_start();

function logged_in(){
  if(isset($_SESSION['email']) || isset($_COOKIE['email'])){
    return true;
  } else {
    return false;
  }
}

include('includes/header.php'); 
?><br><br>
<?php
  $prodID = $_GET['prodid'];

  if(!empty($prodID)){
    $sqlSelectSpecProd = mysql_query("SELECT * FROM sale WHERE id = '$prodID'") or die(mysql_error());
    $getProdInfo = mysql_fetch_array($sqlSelectSpecProd);
    $prodname= $getProdInfo["Product"];
    $prodcat = $getProdInfo["Category"];
    $prodprice = $getProdInfo["Price"];
    $proddesc = $getProdInfo["Description"];
    $prodloc = $getProdInfo["location"];
    $prodimage = $getProdInfo["imgUrl"];
    $prodimage1 = $getProdInfo["imgroom1Url"];
    $prodimage2 = $getProdInfo["imgroom2Url"];
    $prodimage3 = $getProdInfo["imgroom3Url"];
    $prodimage4 = $getProdInfo["imgroom4Url"];
    $prodimage5 = $getProdInfo["imgroom5Url"];
    $prodimage6 = $getProdInfo["imgroom6Url"];
    $prodimage7 = $getProdInfo["imgroom7Url"];
    $prodimage8 = $getProdInfo["imgroom8Url"];
    $prodimage9 = $getProdInfo["imgroom9Url"];
    $prodimage10 = $getProdInfo["imgroom10Url"];
    $prodimage11 = $getProdInfo["imgroom11Url"];
    $prodimage12 = $getProdInfo["imgroom12Url"];
    $prodimage13 = $getProdInfo["imgroom13Url"];
    $prodimage14 = $getProdInfo["imgroom14Url"];
    $prodimage15 = $getProdInfo["imgroom15Url"];
    $prodimage25 = $getProdInfo["imgroom16Url"];
    $status      = $getProdInfo["status"];
        }
?>


<?php
$sql = mysql_query("SELECT ID, status FROM sale WHERE ID = '$prodID' AND status='Available' ");
            if(mysql_num_rows($sql)) : ?>

<?php
$sql = mysql_query("SELECT ID, status FROM sale WHERE ID = '$prodID' AND status='Available' ");
            if(mysql_num_rows($sql)) : ?>
                
<div class="container">
  <div class="row">
     <div class="col-lg-9"><br>
      <b style="float:left; color:#707070;">ID: </b><b style="color:#707070; float:left;"><?php echo $prodID; ?></b>
      <?php include('slider.php'); ?><br><br>
     </div>

     <div class="col-lg-3" style="padding-left:35px; font-style:normal; font-family: Helvetica;"><br>
        <img src="img/final6.jpg" width="200px">
        <p style="color:#fff; text-align:center; font-size:20px; background-color:#377386;"><?php echo $prodloc; ?></p>
         <b>Category:</b><b style="color:#377386;"> <?php echo $prodcat; ?></b><br><br>
         <p><b>Description:<br> </b><b style="color:#377386; font-size:13px;"><?php echo $proddesc; ?></b><br><br>
        <b>Price:</b> <br><span class="price"><b style="color:#377386; font-size:20px;"><?php echo $prodprice; ?> <i style="color:#000; font-size:12px;"></i></b></span></b>
            

                <div class="row">
                  <div class="col-lg-5">
                  <style>
                  input[type=text], input[type=password] {
                      width: 100%;
                      padding: 12px 20px;
                      margin: 8px 0;
                      display: inline-block;
                      border: 1px solid #ccc;
                      box-sizing: border-box;
                  }
                  /* Extra styles for the cancel button */
                  .cancelbtn {
                      width: auto;
                      padding: 10px 18px;
                      background-color: #f44336;
                  }

                  /* Center the image and position the close button */
                  .imgcontainer {
                      text-align: center;
                      margin: 24px 0 12px 0;
                      position: relative;
                  }

                  img.avatar {
                      width: 40%;
                      border-radius: 50%;
                  }

                  .container {
                      padding: 16px;
                  }

                  span.psw {
                      float: right;
                      padding-top: 16px;
                  }


                  .modal {
                      display: none; 
                      position: fixed; 
                      z-index: 1; 
                      left: 0;
                      top: 0;
                      width: 100%; 
                      height: 100%; 
                      overflow: auto; 
                      background-color: rgb(0,0,0); 
                      background-color: rgba(0,0,0,0.4); 
                      padding-top: 60px;
                  }


                  .modal-content {
                      background-color: #fefefe;
                      margin: 5% auto 15% auto; 
                      border: 1px solid #888;
                      width: 80%; 
                  }


                  .close {
                      position: absolute;
                      right: 25px;
                      top: 0;
                      color: #000;
                      font-size: 35px;
                      font-weight: bold;
                  }

                  .close:hover,
                  .close:focus {
                      color: red;
                      cursor: pointer;
                  }


                  .animate {
                      -webkit-animation: animatezoom 0.6s;
                      animation: animatezoom 0.6s
                  }

                  @-webkit-keyframes animatezoom {
                      from {-webkit-transform: scale(0)} 
                      to {-webkit-transform: scale(1)}
                  }
                      
                  @keyframes animatezoom {
                      from {transform: scale(0)} 
                      to {transform: scale(1)}
                  }


                  @media screen and (max-width: 300px) {
                      span.psw {
                         display: block;
                         float: none;
                      }
                      .cancelbtn {
                         width: 100%;
                      }
                  }
                  </style>
                  </head>
                  <body>
                  <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary" style=" background-color:#377386; font-size:11px;">Request Viewing</button>
                </div>

                <div class="col-lg-5">
                                     <?php
                                       $ipaddress = $_SERVER['REMOTE_ADDR'];
                                      
                                       if($ipaddress == '41.222.15.61') : ?>
                                            
                                            <button onclick="document.getElementById('id02').style.display='block'" class="btn" style="width:auto; font-size:11px;">Edit Details</button>

                                          <?php else : ?>

                                          <?php endif; ?>
                                           
                         </div>                 
                       </div>

                <br>
                <div style="font-size:13px;">
                  <b>Contact Info</b><br> Mobile:+254788431125 <br>
                  Tel:020 258 5660 /  +254773060303<br>
                  <b>Email:</b> info@archstonekenya.com<br>
                  <b>P.O.BOX:<br></b> 13730-00800,Nairobi,Kenya</p>
                </div>
                </div>       
   </p>

                <div id="id01" class="modal">
                
                  <form class="modal-content animate" action="" method="POST">
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    </div>

                    <div class="container">

                      <div class="row">
                         <div class="col-lg-6" style="text-align:center;">
                            <p style="background-color:#e9e9e9;">  <h2 class="product" style="color:#fff; text-align:center; font-size:20px; background-color:#377386; width:95%;"><?php echo $prodname; ?></h2>
                             <p><img  class="img-fluid" src="http://archstonekenya.com/images/fulls/<?php echo $prodimage; ?>" style="text-align:center;" width='850px' height='600px' /></p>
                          </div>

                      <div class="col-lg-6">
                            <br><br><br>
                            <div class="col-lg-12" style="text-align:center;">
                              <img src="img/final6.jpg" width="200px;">
                        </div>
                            <br><br>

                    <div class="col-lg-12">
                    <div class="row">
                       <div class="col-lg-6">
                        <div class="form-group">
                          <input  name="Rname" id="email" pattern="[A-Za-z]{1,15}" class="form-control input-sm" placeholder="First Name" value="<?php echo $name ?>" tabindex="4" autofocus required>
                        </div>
                            
                          </div>
                          <div class="col-lg-6">
                             <div class="form-group">
                          <input  name="RLname" id="email" pattern="[A-Za-z]{1,15}" class="form-control input-sm" placeholder="Last Name" value="<?php echo $Lname ?>" tabindex="4" autofocus required>
                        </div>

                          </div>
                        </div>
                        </div>
                    
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <input  name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="invalid email" class="form-control input-sm" placeholder="Email Address" value="<?php echo $email ?>" tabindex="4" autofocus required>
                        </div>

                         <div class="form-group">
                          <input type="tel" name="RPhone"  pattern="^[0-9-+s()]*$" class="form-control input-sm" placeholder="Mobile No" value="<?php echo $Phone ?>" tabindex="3" autofocus required>
                        </div>


                        <div class="form-group">
                          <input type="hidden" name="Pro_ID"  class="form-control input-sm"  value="<?php echo $prodID ?>" tabindex="3" autofocus required>
                        </div>


                              <a href="#"><button type="submit" class="btn btn-primary btn-block " style=" background-color:#377386;">Request Viewing</button></a><br><br>
                            </div>
                          </div>
                          </div>
                        </div>
                    </div>
                     
                        
                     
                    </div>
                  </form>
                </div>


                <script>
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                </script>
              

             
              <div id="id02" class="modal">
                  

                      <div class="col-lg-12">
                        <?php if(logged_in()) : ?>

                      <?php include("update.php"); ?>

                      <form class="modal-content animate" action="update.php" method="POST">
                     
                            <div class="imgcontainer">
                              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                          </div>
                    <div class="container">
                      <div class="row">
                         <div class="col-xs-12 col-sm-6 col-md-6" text-centerstyle="text-align:center;">
                              <p style="background-color:#e9e9e9;">  <h2 class="product" style="color:#fff; text-align:center; font-size:20px; background-color:#377386; width:95%;"><?php echo $prodname; ?></h2>
                                <p><img  class="img-fluid" src="http://archstonekenya.com/images/fulls/<?php echo $prodimage; ?>" style="text-align:center;" width='700px' height='600px' /></p>
                          </div>

                      <div class="col-xs-12 col-sm-6 col-md-6">

                        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                          <img src="img/final6.jpg" width="170px;">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" rows="10" name="description" id="comment"><?php echo $proddesc ?></textarea>
                          </div>
                        </div>

                       <div class="col-lg-12">
                       <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                          <div class="form-group">
                           <label for="comment">Location:</label>
                            <input  name="location" id="email"  class="form-control input-sm" placeholder="Location" value="<?php echo $prodloc ?>" tabindex="4" autofocus required>
                          </div>
                         </div>

                          <div class="col-xs-12 col-sm-4 col-md-4">
                           <div class="form-group">
                           <label for="comment">Price:</label>
                            <input  name="price" id="email"  class="form-control input-sm" placeholder="price" value="<?php echo $prodprice ?>" tabindex="4" autofocus required>
                         </div>

                          </div>

                          <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="form-group">
                              <label for="comment">Status:</label>
                              <select name="status" id="last_name" " class="form-control input-sm">
                                  <option value="<?php echo $status ?>" ><?php echo $status ?></option>
                                  <option value="Available">Available</option>
                                  <option value="Unavailable">Unavailable</option>
                                </select>
                            </div>
                          </div>

                           <div class="form-group">
                            <input type="hidden" name="Pro_ID"  class="form-control input-sm"  value="<?php echo $prodID ?>" tabindex="3" required>
                          </div>
                          </div>
                          </div>
                        
                              <a href="#"><button type="submit" class="btn btn-primary btn-block" name="submit"style=" background-color:#377386;">Update</button></a><br>
                              <b><a style="color:red;" href="logout.php">Log Out</a></b>
                              <br>
                            </div>

                     </div>
                      </div>
                    </div>


                    <?php else : ?><br><br>
                  <form class="modal-content animate" action="includes/login.inc.php" method="POST">
                    <div class="imgcontainer">
                               <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                          </div>
    
                    <div class="row">
                    <div class="col-md-4" style="padding-top:120px; padding-left:100px;">
                       
                    </div>
                    <div class="col-md-4" style="text-align:center;"><br><br>
                      <img src="img/final6.jpg" width="200px"><br>
                      <b>Login To Make Changes</b><br>
                        <h6 style="color:red; font-size:11px;"><?php echo $emailErr; ?></h6>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <h6 style="color:red;"></h6>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="Pro_ID"  class="form-control input-sm"  value="<?php echo $prodID ?>" tabindex="3" required>
                          </div>

                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                      </div>
                    </div>
                    <br><br>
            </div>
                      </div>
                    </div>
                    <br><br>
                     <?php endif; ?>
                    </div>
                  </form>
 
                </div>

                <script>
                // Get the modal
                var modal = document.getElementById('id02');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                </script>
                                  <?php endif; ?>
                                  <?php endif; ?>

                  </div>
                </div>

                <?php include('includes/footer.php'); ?>