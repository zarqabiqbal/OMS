<?php 
 include_once("../header.php");
 include_once("navbar.php");
 include_once("../connect.php");
 if (isset($_POST['entry'])) {
 	$disease_name=$_POST['dn'];
 	$disease_desc=$_POST['dd'];
 	$query="SELECT  disease_name FROM disease where disease_name='$disease_name'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $count=mysqli_num_rows($result);
    if ($count==0) {
    	$query="INSERT INTO disease(disease_name,disease_desc) values('$disease_name','$disease_desc')";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        if($result){
        	$str="<script type='text/javascript'>alert('Disease Entry Successful');</script>";
    	   echo $str;
    	   
    	   
        }
    }
    else{
    	$str="<script type='text/javascript'>alert('Disease Name Already Exist');</script>";
    	echo $str;
    }
 }
 ?>

 <div class="container" style="width: 500px; height: 425px;">
 	<div class="jumbotron" style="background: #80e5ff;">
      <div class="form-group">
      <form action="" method="post">
        <label for="usr">Disease Name:</label>
          <input type="text" class="form-control" id="usr" name="dn" required>
      </div>
      <div class="form-group">
  		<label for="comment">Disease Describtion:</label>
   		  <textarea class="form-control" rows="7" id="comment" name="dd" required></textarea>
	  </div>
 	  <br/>
      <div class="align-center">
          <button type="submit" class="btn btn-default" name="entry" onclick="return confirm('Proceed')">Submit</button>
       </div>
    </form> 
 	</div> 	
 </div>


 

<?php include_once("bottombar.php"); ?>
</body>
<?
 include_once("../footer.php");
 ?