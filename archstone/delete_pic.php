<?php
  include("../include/init.php"); 


   //$add_actve    =   $_POST['Active'];
    $View         =   $_POST['View'];


   $userID_1 = user_id($_SESSION['email']);
   $dirc = get_email($_SESSION['email']);

   if (!empty($_POST["Active"])) {

      $Total_Ads2 = mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1' AND status ='Active'");
        $Adverts_Tot2 = mysqli_num_rows($Total_Ads2);

          if ($Adverts_Tot2 == 0) {
            echo "<div class='col-sm-12' style='text-align:left; padding:100px;' >
            <h2>There are no active Adverts</h2> 
            </div>";
          }else{

          $Total_Ads2 = mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1' AND status ='Active'");


                      if($Total_Ads2){        
                              while($row = mysqli_fetch_array($Total_Ads2)){
                              $adID = $row['ad_id'];

                                  if ($row['ad_category'] == 'Real Estates') {
                                  $images = glob("../uploads/".$dirc."/".$adID."/*.*");
                                  }else{
                                    $images = glob("../uploads/logos/".$dirc."/".$adID."/*.*");
                                  }

                                $Dscr = substr($row['Description'],0,200);
                                $loc = substr($row['Location'],0,32);
                                $advert_ID = $row['ad_id'];

                                        echo '<div class="row" style="border-bottom: 1px solid #ccc;  border-top: 1px solid #ccc;">';
                                          echo '<ul style="list-style-type: none;">';
                                             echo '<li>';

                                              echo '<div class="col-sm-4">';
                                              echo $advert_ID;


                                        for($index = 0; $index < 1; $index++)
                                              {
                                              echo '<img src="'.$images[$index] .'" width="100%" height="20%" style="border:0px dotted #cacaca; margin-top:10px;"/>';
                                              echo '</div>';
                                              }

                                              echo '<div class="col-sm-8 myNewDivHeight" style="background-color:#F0F0F0;" style="padding-bottom:100%;"><br>';
                                              echo "<b style='font-size:20px;'>".$row['property_type']."</b></b><br>".$Dscr."<b>...<br><br>
                                                <div class='row'>
                                                <div class='col-sm-6'>
                                                <i class='glyphicon glyphicon-map-marker'></i></b><d style='color:blue;'>".$loc.'<b>...</b></d><br>
                                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-star-empty"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-thumbs-down"></i>    
                                                </div>';

                                              echo '<div class="col-sm-1"></div>
                                                    <div class="col-sm-5" style="padding-top:12px;"><a hrer="">edit</a> &nbsp;&nbsp;
                                                    <input type="hidden" value="'.$advert_ID.'"  id="'.$advert_ID.'"  class="form-control">
                                                    <a hrer="#"  onclick="return chk'.$advert_ID.'()">View</a> &nbsp;&nbsp;'.$row['status'].'</div>
                                              </div></div>';

                                              echo "<script>

                                                      function chk".$advert_ID."()
                                                            {
                                                                
                                                                var View2 = document.getElementById('".$advert_ID."').value; 
                                                                var dataString='View='+View2;
                                                                $.ajax(
                                                                    {
                                                                      type:'POST',
                                                                      url:'add_display.php',
                                                                      data:dataString,
                                                                      cache:false,
                                                                      success:function(html){
                                                                        $('#msg3').html(html);
                                                                      }
                                                                    }
                                                                  );
                                                                return false;
                                                            }

                                                    </script>";

                                             echo '</li>';
                                          echo '</ul>';
                                        echo '</div><br>';
                                      
                              }
                            }

                   }
              }


   if (!empty($_POST["all_adds"])) {

      $Total_Ads2 = mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1'");
        $Adverts_Tot2 = mysqli_num_rows($Total_Ads2);

          if ($Adverts_Tot2 == 0) {
            echo "<div class='col-sm-12' style='text-align:left; padding:100px;' >
            <h2>Please start creating Adverts</h2><br>
                 <a href='add_new_ads'><button type='button' class='btn btn-info'><i class='glyphicon glyphicon-plus'></i> Place an Advert</button></a>                      
                </div>
              </div>
            </div>";
          }else{

          $Total_Ads2 = mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1' ");


                      if($Total_Ads2){        
                              while($row = mysqli_fetch_array($Total_Ads2)){
                              $adID = $row['ad_id'];

                                  if ($row['ad_category'] == 'Real Estates') {
                                  $images = glob("../uploads/".$dirc."/".$adID."/*.*");
                                  }else{
                                    $images = glob("../uploads/logos/".$dirc."/".$adID."/*.*");
                                  }
                                
                                  $Dscr = substr($row['Description'],0,200);
                                  $loc = substr($row['Location'],0,32);
                                  $advert_ID = $row['ad_id'];

                               

                                        echo '<div class="row" style="border-bottom: 1px solid #ccc;  border-top: 1px solid #ccc;">';
                                          echo '<ul style="list-style-type: none;">';
                                             echo '<li>';

                                              echo '<div class="col-sm-4">';

                                               for($index = 0; $index < 1; $index++)
                                                {
                                                echo '<img src="' . $images[$index] .'" width="100%" height="20%" style="border:0px dotted #cacaca; margin-top:10px;"/>';
                                                }
                                              echo '</div>';

                                              echo '<div class="col-sm-8 myNewDivHeight" style="background-color:#F0F0F0;" style="padding-bottom:100%;"><br>';
                                                echo "<b style='font-size:20px;'>".$row['property_type']."</b></b><br>".$Dscr."<b>...<br><br>
                                                <div class='row'>
                                                <div class='col-sm-6'>
                                                <i class='glyphicon glyphicon-map-marker'></i></b><d style='color:blue;'>".$loc.'<b>...</b></d><br>
                                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-star-empty"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-thumbs-down"></i>
                                                    
                                                </div>';
                                              echo '<div class="col-sm-1"></div>
                                                    <a hrer="">edit</a> &nbsp;&nbsp;
                                                    <input type="hidden" value="'.$advert_ID.'"  id="'.$advert_ID.'"  class="form-control">
                                                    <a hrer="#"  class="Poiner" onclick="return chk'.$advert_ID.'()">View</a> &nbsp;&nbsp;'.$row['status'].'</div>

                                              </div></div>';

                                                echo "<script>

                                                      function chk".$advert_ID."()
                                                            {
                                                                
                                                                var View2 = document.getElementById('".$advert_ID."').value; 
                                                                var dataString='View='+View2;
                                                                $.ajax(
                                                                    {
                                                                      type:'POST',
                                                                      url:'add_display',
                                                                      data:dataString,
                                                                      cache:false,
                                                                      success:function(html){
                                                                        $('#msg3').html(html);
                                                                      }
                                                                    }
                                                                  );
                                                                return false;
                                                            }

                                                    </script>";


                                             echo '</li>';
                                          echo '</ul>';
                                        echo '</div><br>';

                                      

                              }
                            }
                         }
                      }


   if (!empty($_POST["pending"])) {

      $Total_Ads2 = mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1'  AND status ='Pending'");
        $Adverts_Tot2 = mysqli_num_rows($Total_Ads2);

          if ($Adverts_Tot2 == 0) {
            echo "<div class='col-sm-12' style='text-align:left; padding:100px;' >
            <h2>There are no Pending Adverts</h2> 
            </div>";
          }else{

          $Total_Ads2 = mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1'  AND status ='Pending' ");


                      if($Total_Ads2){        
                              while($row = mysqli_fetch_array($Total_Ads2)){
                              $adID = $row['ad_id'];

                                  if ($row['ad_category'] == 'Real Estates') {
                                  $images = glob("../uploads/".$dirc."/".$adID."/*.*");
                                  }else{
                                    $images = glob("../uploads/logos/".$dirc."/".$adID."/*.*");
                                  }

                                $Dscr = substr($row['Description'],0,200);
                                $loc = substr($row['Location'],0,32);
                                $advert_ID = $row['ad_id'];

                                for($index = 0; $index < 1; $index++)
                                      {
                                         echo '<div class="row" style="border-bottom: 1px solid #ccc;  border-top: 1px solid #ccc;">';
                                          echo '<ul style="list-style-type: none;">';
                                             echo '<li>';

                                              echo '<div class="col-sm-4">';
                                                echo '<img src="' . $images[$index] .'" width="100%" height="20%" style="border:0px dotted #cacaca; margin-top:10px;"/>';
                                              echo '</div>';

                                              echo '<div class="col-sm-8 myNewDivHeight" style="background-color:#F0F0F0;" style="padding-bottom:100%;"><br>';
                                                echo "<b style='font-size:20px;'>".$row['property_type']."</b></b><br>".$Dscr."<b>...<br><br>
                                                <div class='row'>
                                                <div class='col-sm-6'>
                                                <i class='glyphicon glyphicon-map-marker'></i></b><d style='color:blue;'>".$loc.'<b>...</b></d><br>
                                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-star-empty"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-thumbs-down"></i>
                                                    
                                                </div>';
                                             
                                              echo '<div class="col-sm-1"></div>
                                                    <div class="col-sm-5" style="padding-top:12px;"><a hrer="">edit</a> &nbsp;&nbsp;
                                                    <input type="hidden" value="'.$advert_ID.'"  id="'.$advert_ID.'"  class="form-control">
                                                    <a hrer="#"  onclick="return chk'.$advert_ID.'()">View</a> &nbsp;&nbsp;'.$row['status'].'</div>
                                              </div></div>';

                                              echo "<script>

                                                      function chk".$advert_ID."()
                                                  {
                                                      
                                                      var View2 = document.getElementById('".$advert_ID."').value; 
                                                      var dataString='View='+View2;
                                                      $.ajax(
                                                          {
                                                            type:'POST',
                                                            url:'add_display.php',
                                                            data:dataString,
                                                            cache:false,
                                                            success:function(html){
                                                              $('#msg3').html(html);
                                                            }
                                                          }
                                                        );
                                                      return false;
                                                  }

                                                    </script>";


                                             echo '</li>';
                                          echo '</ul>';
                                        echo '</div><br>';
                                      }


                              }
                            }


          }
        }


if (!empty($_POST["Deactivated"])) {

      $Total_Ads2 = mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1'  AND status ='Deactivated'");
        $Adverts_Tot2 = mysqli_num_rows($Total_Ads2);

          if ($Adverts_Tot2 == 0) {
            echo "<div class='col-sm-12' style='text-align:left; padding:100px;' >
            <h2>There are no Deactivated Adverts</h2> 
            </div>";
          }else{

          $Total_Ads2 = mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1'  AND status ='Deactivated' ");


                      if($Total_Ads2){        
                              while($row = mysqli_fetch_array($Total_Ads2)){
                              $adID = $row['ad_id'];

                                  if ($row['ad_category'] == 'Real Estates') {
                                  $images = glob("../uploads/".$dirc."/".$adID."/*.*");
                                  }else{
                                    $images = glob("../uploads/logos/".$dirc."/".$adID."/*.*");
                                  }

                                $Dscr = substr($row['Description'],0,200);
                                $loc = substr($row['Location'],0,32);
                                $advert_ID = $row['ad_id'];

                                for($index = 0; $index < 1; $index++)
                                      {
                                        echo '<div class="row" style="border-bottom: 1px solid #ccc;  border-top: 1px solid #ccc;">';
                                          echo '<ul style="list-style-type: none;">';
                                             echo '<li>';

                                              echo '<div class="col-sm-4">';
                                                echo '<img src="' . $images[$index] .'" width="100%" height="20%" style="border:0px dotted #cacaca; margin-top:10px;"/>';
                                              echo '</div>';

                                              echo '<div class="col-sm-8 myNewDivHeight" style="background-color:#F0F0F0;" style="padding-bottom:100%;"><br>';
                                                echo "<b style='font-size:20px;'>".$row['property_type']."</b></b><br>".$Dscr."<b>...<br><br>
                                                <div class='row'>
                                                <div class='col-sm-6'>
                                                <i class='glyphicon glyphicon-map-marker'></i></b><d style='color:blue;'>".$loc.'<b>...</b></d><br>
                                                <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-star-empty"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-thumbs-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <i class="glyphicon glyphicon-thumbs-down"></i>
                                              
                                                </div>';
                                              

                                              echo '<div class="col-sm-1"></div>
                                                    <div class="col-sm-5" style="padding-top:12px;"><a hrer="">edit</a> &nbsp;&nbsp;
                                                    <input type="hidden" value="'.$advert_ID.'"  id="'.$advert_ID.'"  class="form-control">
                                                    <a hrer="#"  onclick="return chk'.$advert_ID.'()">View</a> &nbsp;&nbsp;'.$row['status'].'</div>
                                              </div></div>';

                                              echo "<script>

                                                      function chk".$advert_ID."()
                                                  {
                                                      
                                                      var View2 = document.getElementById('".$advert_ID."').value; 
                                                      var dataString='View='+View2;
                                                      $.ajax(
                                                          {
                                                            type:'POST',
                                                            url:'add_display.php',
                                                            data:dataString,
                                                            cache:false,
                                                            success:function(html){
                                                              $('#msg3').html(html);
                                                            }
                                                          }
                                                        );
                                                      return false;
                                                  }

                                                    </script>";


                                             echo '</li>';
                                          echo '</ul>';
                                        echo '</div><br>';
                                      }

                              }
                            }


          }
        }


  if (!empty($_POST["Overview"])) {

                $Total_Ads =mysqli_query($conn, "SELECT * FROM adverts WHERE user_id = '$userID_1'");
                $totAdds = mysqli_num_rows($Total_Ads);
                
         echo '<div class="row">
                <div class="col-sm-6 menu3">
                  <h5 style="background-color:#E8E8E8; padding:8px;"><i class="glyphicon glyphicon-user"></i> Profile</h5>
                  <h6>Edit your account settings.</h6>
                  <h6><a href="profile" id="Profile" onclick="return chk22()">Edit <i class="glyphicon glyphicon-pencil"></i></a></h6>
                  <br>
                </div>

                <div class="col-sm-6 menu3">
                  <h5 style="background-color:#E8E8E8; padding:8px;"><i class="glyphicon glyphicon-edit"></i> My Ads <b style="background-color:#000; float:right; color:#fff; padding:3px; border-radius:10px;">';

                  if ( $totAdds == 0 ) {
                      echo  0;
                      }else{
                         echo  $totAdds;
                      }
         


        echo'</b></h5>
                  <h6>Manage Your Ads.</h6>
                  <h6><a href="ad_Listing" id="all_adds" onclick="return chk18()">View <i class="glyphicon glyphicon-new-window"></i></a></h6>
                  <br>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 menu3">
                  <h5 style="background-color:#E8E8E8; padding:8px;"><i class="glyphicon glyphicon-comment"></i> Messages</h5>
                  <h6>Manage your inbox.</h6>
                  <h6><a href="messages" id="messages"  onclick="return chk23()">Read <i class="glyphicon glyphicon-new-window"></i></a></h6>
                  <br>
                </div>

                <div class="col-sm-6 menu3">
                  <h5 style="background-color:#E8E8E8; padding:8px;"><i class="glyphicon glyphicon-star"></i> Favourites</h5>
                  <h6>List your favourite Ads.</h6>
                  <h6><a href="favourites"  id="Favourites"  onclick="return chk24()">View <i class="glyphicon glyphicon-new-window"></i></a></h6>
                  <br>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 menu3">
                  <h5 style="background-color:#E8E8E8; padding:8px;"><i class="glyphicon glyphicon-exclamation-sign"></i> Email Alerts</h5>
                  <h6>Manage your Email alerts & change your newsletter settings.</h6>
                  <h6><a href="email_alerts" id="email_alerts"  onclick="return chk25()">More <i class="glyphicon glyphicon-new-window"></i></a></h6>
                  <br>
                </div>

                <div class="col-sm-6">

                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 menu3">
                 <a href="add_new_ads"><button type="button" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Place an Advert</button>
                </div></a> 

                <div class="col-sm-6">
                  
                </div>
              </div>

            </div>
            
         
      </div>'; 
        }


        if (!empty($_POST["Profile"])) {


         include'profile.php';


        }



          if (!empty($_POST["messages"])) {

            $Total_messages = mysqli_query($conn, "SELECT * FROM messages WHERE user_id = '$userID_1'");
                $all_messages = mysqli_num_rows($Total_messages);

              if ($all_messages == 0) {
                  echo "<div class='col-sm-12' style='text-align:left; padding:100px;' >
                  <h2>There are no messages in your inbox</h2> 
                  </div>";
              }else{

                include'messages.php';
              }
            
        }



          if (!empty($_POST["Favourites"])) {

            $Total_messages = mysqli_query($conn, "SELECT * FROM messages WHERE user_id = '$userID_1'");
                $all_messages = mysqli_num_rows($Total_messages);

              if ($all_messages == 0) {
                  echo "<div class='col-sm-12' style='text-align:left; padding:100px;' >
                  <h2>You have no favourites</h2> 
                  </div>";
              }else{

                include'messages.php';
              }
            
        }


          if (!empty($_POST["email_alerts"])) {

            $Total_messages = mysqli_query($conn, "SELECT * FROM messages WHERE user_id = '$userID_1'");
                $all_messages = mysqli_num_rows($Total_messages);

              if ($all_messages == 0) {
                  echo "<div class='col-sm-12' style='text-align:left; padding:100px;' >
                  <h2>No active alerts</h2> 
                  </div>";
              }else{

                include'messages.php';
              }
            
        }


         if (!empty($_POST["View"])) {


            
             $dirc = get_email($_SESSION['email']);
                   $userID = user_id($_SESSION['email']);

                   $Ads = mysqli_query($conn, "SELECT * FROM adverts WHERE user_Id = '$userID' AND ad_id = '$View'");
                       
                       while($row = mysqli_fetch_array($Ads)){

                        $open_time = $row['open_time'];
                        $closing_time = $row['closing_time'];

                       if ($row['ad_category'] == 'Real Estates') {
                              

                              $dirc = get_email($_SESSION['email']);
                              $images = glob("../uploads/".$dirc."/".$View."/*.*");

                              include 'advert_preview.php';


                       }else{
                  
                        $images = glob("../uploads/logos/".$dirc."/".$View."/*.*");                                

                                      for($index = 0; $index < 1; $index++)
                                        {
                                          
                                          echo '<ul class="col-sm-6 enlarge" style="text-align:center; height:200px font-size:15px;;">';

                                          echo '<diV style="height:100px; "><br><img  src="' . $images[$index] .'" width="99%" height="110%"/></div></ul>';

                                           echo '<ul class="col-sm-12 enlarge" style="text-align:Left; height:200px border-top:5px solid #cacaca;"><br><div class="col-sm-12"><i class="glyphicon glyphicon-map-marker"></i> '.$row['Location'].'<br><br></div><b style="color:#808080; font-size:18px;"><div class="col-sm-12">Category: '.$row['category'].'<br><br></div></b><br><br><div class="col-sm-12">'.$row['Description'].'</div>';

                                           echo'<div class="col-sm-12"><br>
                                            <b>Opening Time:</b> '. date("h.i A", $open_time).'<br>
                                            <b>Closing Time:</b>&nbsp;&nbsp; '.date("h.i A", $closing_time).'
                                           </div>';

                                           echo'<div class="col-sm-12" style="color:#808080;"><br><br><b> &nbsp;<img  src="../img/phone.ico" width="23px;"> &nbsp;' .$row['Tel'].'<br><img  src="../img/media.ico" width="37px;"> Whats app</b><br>
                                            &nbsp;&nbsp;<img  src="../img/opened-email-envelope_icon-icons.com_70656.ico" width="22px;"> &nbsp;<b>' .$row['shop_email'].' </b><br><br></div>';
                                          

                                           echo'<div class="col-sm-12" style="color:#808080;">
                                           <a href="add_shop 1112  & services edit?ad_id='.$ad_id.'"><div class="col-sm-3" style="color:red;">
                                           <button type="button" class="btn btn-secondary btn-block">Edit</button></a>
                                           </div>

                                           <div class="col-sm-3" style="color:#808080;"></div>

                                           <div class="col-sm-3" style="color:#808080;"></div>

                                           <div class="col-sm-3" style="color:#808080;">
                                           <button type="button" class="btn btn-success btn-block">Publish</button>
                                           </div>

                                           </div>';
                                            echo '</ul>';
                                        }
                                }

                        }
        }


  ?>