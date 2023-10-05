<?php include('includes/header.php'); ?>
   <style> 
        #contact {position:fixed; width:100%; background-size:cover; background-position:center; background-image:url(img/intro-carousel/5-min.jpeg); text-align:center; z-index:-2000; background-color: rgba(255, 0, 0, 0.1)}
    </style>

    <div class="container-fluid" id="contact" style="background-color:black; color:#fff; ">
     <p ><br><br>
      <b style="color:#fff; font-weight:bolder; font-size:50px;"></b><br><br>
    </p><br>
  </div><br>
  <div class="container" style="text-align: center; color:#fff; border-radius:5px;">
    <div class="col-xs-12 col-md-12 col-md-12">
    <p ><br><br><br><br><br>
      <h1><b>CONTACT US</b></h1>
    </p>
    <br><br>
</div>
<style>
.fa {
  padding: 9px;
  font-size: 24px;
  width: auto;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius:50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-phone {
  background: #075f73;
  color: white;
}

.fa-envelope {
  background: #075f73;
  color: white;
}


.fa-globe {
  background: #075f73;
  color: white;
}


</style>
   
      <div class="row" style="background-color:#fff;">

         <div class="col-xs-12 col-md-4 col-md-4" style="color:#000; padding-left:40px;"><br><br>
            <h4>ARCHSTONE</h4>
                     <address style="text-align:left;">
                     <table id="tableone">
                        <tr> <p ><o class="fa fa-phone"></o>&nbsp;&nbsp;0788431125</p></tr>
                        <tr><p ><o class="fa fa-phone"></o> &nbsp;&nbsp;0202585660 / 0775400811</p></tr>
                        <tr><p ><o class="fa fa-envelope"></o>&nbsp;&nbsp;info@archstonekenya.com</p></tr>
                        <tr><p ><o class="fa fa-globe"></o>&nbsp;&nbsp;www.archstonekenya.com </p></tr>
                     </table>
                     </address> 
                     <br><br>
          </div>

           <div class="col-xs-12 col-md-4 col-md-4"><br><br>
            <h4  style="color:#000;" >CONTACT US</h4>
            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data" >
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
               
            <div class="form-group">
              <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder="First Name" value="<?php echo $name ?>" tabindex="1" autofocus>
              <span class="error"><?php echo $name_error ?></span>
            </div>
            
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
              <input type="text" name="Lname" id="last_name" class="form-control input-sm" placeholder="Last Name" value="<?php echo $Lname ?>" tabindex="2" >
              <span class="error"><?php echo $Lname_error ?></span>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <input  name="email" id="email" class="form-control input-sm" placeholder="Email Address" value="<?php echo $email ?>" tabindex="4" >
          <span class="error"><?php echo $email_error ?></span>
        </div>

         <div class="form-group">
          <input type="text" name="Phone"  class="form-control input-sm" placeholder="Mobile No" value="<?php echo $Phone ?>" tabindex="3" >
          <span class="error"><?php echo $Phone_error ?></span>
        </div>


        <div class="form-group">
          <input type="text" name="url" id="email" class="form-control input-sm" placeholder="Subject" value="<?php echo $url ?>" tabindex="4" >
          <span class="error"><?php echo $url_error ?></span>
        </div>

         <div class="form-group">
          <textarea class="form-control" name="message" rows="5" id="comment" placeholder="Message"></textarea>
        </div>

        <a href="#"><button type="submit" class="btn btn-primary btn-block btn-primary2" style="background-color:#075f73;">Send</button></a>
      </form>
      <br><br>
          </div>

           <div class="col-xs-12 col-md-4 col-md-4"><br><br>
            <h4  style="color: #000;" >MAP</h4>
              <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCI1fOIdfiC3QipBSLzVymg6mM_nbopACs'>
                  
              </script>
              <div style='overflow:hidden;height:400px;width:363px; '>
                  <div id='gmap_canvas' style='height:400px;width:370px;'>
                      
                  </div>
              <iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=500&amp;height=400&amp;hl=en&amp;q=Archstone%20Realtors%20Kenya%20Nairobi+(Archstone%20Kenya%20map)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.embed-map.net/'></a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=dd0dc1c2fd9a21c9ec924c914a5d27a1b8fb25a2'></script>
              </div> 
              <br><br>
          </div>

      </div>
    </div>

</div>

			
<?php include('includes/footer.php'); ?>