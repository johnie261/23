<?php
include('includes/db.php');

	if (!empty($_POST["Runda"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Runda</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Runda'  ORDER BY  indexp ASC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}


		if (!empty($_POST["Rosslyn"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Rosslyn</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Rosslyn'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}



		if (!empty($_POST["Nyari"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Nyari</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Nyari'  ORDER BY  indexp DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}


	if (!empty($_POST["Kitisuru"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Kitisuru</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Kitisuru'  ORDER BY  indexp   DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}


		if (!empty($_POST["Peponi"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><br><h4 style='text-align:center;color:black'>Properties In Peponi</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Peponi'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}



	if (!empty($_POST["Kilimani"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'>Properties In Kilimani</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Kilimani'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }   
      if($result=null){
          	echo "<div><h4 style='text-align:left;'><br>No Properties Available In Kilimani</h4></div>";
          
      }

      echo '</div>';
		}
		
		
		
		if (!empty($_POST["Spring Valley"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Spring Valley</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where Product='Spring Valley' and not status ='Unavailable' ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }if($result=null){
          	echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>No Properties Available In Spring Valley</h4></div>";
          
      }

      echo '</div>';
		}
		
		
			
		if (!empty($_POST["Loresho"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Loresho</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Loresho'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}
		
		
			if (!empty($_POST["Ridgeways"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Ridgeways</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Ridgeways'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}
		
		
				if (!empty($_POST["Lower Kabete"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Lower Kabete</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and Product = 'Lower Kabete'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}
		
		
		
if (!empty($_POST["Muthaiga"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Muthaiga</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Muthaiga'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}
		
		
		if (!empty($_POST["Lavington"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Lavington</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Lavington'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}
		
		
			if (!empty($_POST["Gigiri"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Gigiri</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Gigiri'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}
		
		
		
			
			if (!empty($_POST["Kilifi"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Kilifi</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Kilifi'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}
		
		
				if (!empty($_POST["Kyuna"])) {

		echo ' <div class="row">';
		echo "<div class='col-sm-12'><h4 style='text-align:center;'><br>Properties In Kyuna</h4></div>";
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

          $result = mysql_query("SELECT * FROM property where id not in('139','138','136','165') and not status ='Unavailable' and location = 'Kyuna'  ORDER BY  indexp  DESC");
                }
          
        if($result){        
        while($row=mysql_fetch_array($result)){
          
        $prodID = $row["ID"];
          echo '<ul class="col-sm-4" style="height:320px;" >';
          echo '<div class="single-products" >
              <div class="productinfo text-center" >
              <b style="text-align:center; color:#377386; font-weight:bolder; font-size:20px;">'.$row['location'].'  </b><b style="float:right; color:#707070;">'.$prodID.'</b><b style="color:#707070; float:right;">ID:</b>

              
            <div class="img_wrap ">
            <a class="img_wrap" href="details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'" target="_blank"><img  class="img-fluid img img_img" src="http://archstonekenya.com/images/fulls/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="100%" height="250" /></a>
                    </a>

            </div>';    
          echo '</ul>'; 



        }
       
      }

      echo '</div>';
		}
?>
