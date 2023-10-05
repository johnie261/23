<?php 
ob_start();
session_start();

 $ipaddress = $_SERVER['REMOTE_ADDR'];
 if($ipaddress == '41.222.15.61') : ?>

<?php 
include("includes/login.inc2.php");
include('includes/header2.php');
?>
     
            <br><br><br><br><br>
            <div class="container">
                  <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                  	
                    <div class="row">
                    <div class="col-md-4" style="padding-top:120px; padding-left:100px;">
                       
                    </div>
                    <div class="col-md-4" style="text-align:center;"><br><br>
                      <img src="img/final6.jpg" width="200px"><br><br>
                      <b><h3>Login</h3></b>
                        <h6 style="color:red; font-size:11px;"><?php echo $emailErr; ?></h6>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <h6 style="color:red;"></h6>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                        </div>

                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                      </div>
                    </div>
                    <br><br>
            </div>

        <?php else : ?>
        <div class="container" style="text-align: center;">
          <p><h1>You are not authorized to access this page</h1></p>
        </div>
        <?php endif; ?>