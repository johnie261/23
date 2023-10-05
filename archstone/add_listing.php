
<?php 
// include("includes/login.inc2.php");
include('includes/header.php');
?>

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
 <div class="container"><br><br><br><br>

                      <div class="row">
                         <div class="col-xs-12 col-sm-7 col-md-7" text-centerstyle="text-align:center;">
                            <h4>Upload Images</h4>
                            <div id="msg3">
			                       <div id="image_gallery">
                              <?php
                                  $NextNum = mysql_query("SELECT MAX(ID) AS property_code FROM property where id not in('899','900','1000') ");
                                  $row = mysql_fetch_array( $NextNum );
                                  $largestNumber = $row['property_code']  + 1;
                                  echo '<b style="color:#000;">'.$largestNumber.'</b>';
                                ?>
                               <div class="row">
                                <?php
                                  $NextNum = mysql_query("SELECT MAX(ID) AS property_code FROM property where id not in('899','900','1000') ");
                                  $row = mysql_fetch_array( $NextNum );
                                  $largestNumber = $row['property_code']  + 1;
                      
                                  $images = glob("img_uploads/".$largestNumber."/*.*");
                                  
                                  foreach($images as $image)
                                  {
                                    echo '<div class="col-md-4" align="center"><d class="img_wrapper"><img src="' . $image .'" width="200px" height="150px" style="border:1px dotted #cacaca; margin-top:10px;"/>
                                   
                                    <input type="hidden" value="'.basename($image).'"></span>
                                    <span><button type="button" value="KIlimani" id="KIlimani" onclick="return chkQ()" class="btn btn-block btn-danger"><i class="fa fa-trash fa-lg"> </i></button></span></d>
                                
                                    <br></div>';

                                     echo "<script>

                                                      function chkQ()
                                                            {
                                                                
                                                                var View2 = document.getElementById('".$advert_ID."').value; 
                                                                var dataString='View='+View2;
                                                                $.ajax(
                                                                    {
                                                                      type:'POST',
                                                                      url:'delete_pic.php',
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


                                  }
                                
                                ?>
                                                  
                             </div>
                            </div>
                          </div>

                          <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
                          <!-- <form>
  <input type="file" id="myFile" name="filename">
  <input type="submit">
</form> -->

                              <!-- <br><button type="button" data-toggle="modal" data-target="#src_img_upload" class="file btn btn-sm"><b>+</b> Add photo</button> -->

                          </div>

                      <div class="col-xs-12 col-sm-5 col-md-5">

                        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align:center;">
                          <img src="img/final6.jpg" width="170px;">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                           <div class="form-group">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" rows="10" name="description" id="comment"></textarea>
                          </div>
                        </div>

                       <div class="col-lg-12">
                       <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                          <div class="form-group">
                           <label for="comment">Location:</label>
                            <input  name="location" id="email"  class="form-control input-sm" placeholder="Location" tabindex="4" autofocus required>
                          </div>
                         </div>

                          <div class="col-xs-12 col-sm-4 col-md-4">
                           <div class="form-group">
                           <label for="comment">Price:</label>
                            <input  name="price" id="email"  class="form-control input-sm" placeholder="price"  tabindex="4" autofocus required>
                         </div>

                          </div>

                          <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="form-group">
                              <label for="comment">Status:</label>
                              <select name="status" id="last_name" " class="form-control input-sm">
                                  <option value="Unavailable">In-active</option>
                                  <option value="Available">Active</option>
                                  <option value="Unavailable">Sold</option>
                                  <option value="Unavailable">Let Out</option>
                                </select>
                            </div>
                          </div>

                          </div>
                          </div>
                        
                             
                              <br>
                            </div>

                     </div>
                      </div>
                    </div>

  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>