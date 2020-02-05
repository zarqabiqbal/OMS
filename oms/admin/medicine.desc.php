<?php 
 include_once("../header.php");
 include_once("navbar.php");
 include_once("../connect.php");
 ?>
 <head><style type="text/css">label{color: blue;}</style></head>

 <div class="container" style="width: 100%; height: 400px;">
  <div class="align-left">
  
  	<div class="jumbotron" style="background: #80e5ff; width: 100%;">
      <div class="form-group">
        <?php
         $dn=$_GET["dn"];
         $query="SELECT  * FROM medicine where disease_name='$dn'";
         $result = mysqli_query($con,$query) or die(mysqli_error($con));
         while ($row=mysqli_fetch_assoc($result)) {
      
       echo '<label for="usr">Medicine Name:</label>';
       echo '<p id="usr">'.$row["medicine_name"].'</p>';
          
       echo '</div>';
       echo '<div class="form-group">';
       echo '<label for="comment">Medicine Description:</label>';
       echo	'<p id="comment">'.$row["medicine_desc"].'</p>';
        
       echo '<div class="form-group">';
       echo '<label for="comment">Medicine Containment:</label>';
       echo '<p id="comment">'.$row["medicine_containment"].'</p>';
       
       echo '<div class="form-group">';
       echo '<label for="comment">Medicine For Disease:</label>';
       echo '<p id="comment">'.$row["disease_name"].'</p>';

     }?>
	  </div>
 	  <br/>
      
         
       </div>
    
 	 </div>
  </div>


 

<?php include_once("bottombar.php"); ?>
</body>
<?
 include_once("../footer.php");
 ?>