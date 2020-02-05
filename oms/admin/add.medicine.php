<?php 
 include_once("../header.php");
 include_once("navbar.php");
 include_once("../connect.php");
 if (isset($_POST['entry'])) {
 	$disease_name=$_POST['dn'];
 	$medicine_name=$_POST['mn'];
  $medicine_desc=$_POST['md'];
  $medicine_cont=$_POST['mc'];
 	$query="SELECT  medicine_name FROM medicine where medicine_name='$medicine_name'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    $count=mysqli_num_rows($result);
    if ($count==0) {
    	$query="INSERT INTO medicine(disease_name,medicine_name,medicine_desc,medicine_containment) values('$disease_name','$medicine_name','$medicine_desc','$medicine_cont')";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        if($result){
         $str="<script type='text/javascript'>alert('Medicine Entry Successful');</script>";
    	   echo $str;
    	   
    	   
        }
    }
    else{
    	$str="<script type='text/javascript'>alert('Medicine Already Exist');</script>";
    	echo $str;
    }
 }
 ?>

 <div class="container" style="width: 500px;">
 	<div class="jumbotron" style="background: #80e5ff;">
      <div class="form-group">
      <form action="" method="post">
        <label for="usr">Disease Name:</label>
          <input type="text" class="form-control" id="usr" name="dn" required>
      </div>
      <div class="form-group">
  		<label for="comment">Medicine Name:</label>
   		  <input type="text" class="form-control" id="usr" name="mn" required>
	  </div>
    <div class="form-group">
      <label for="comment">Medicine Describtion:</label>
        <textarea class="form-control" rows="7" id="comment" name="md" required=""></textarea>
    </div>
    <div class="form-group">
      <label for="comment">Medicine Containment:</label>
        <textarea class="form-control" rows="7" id="comment" name="mc" required=""></textarea>
    </div>
 	  <br/>
      <div class="align-center">
          <button type="submit" class="btn btn-default" name="entry" onclick="return confirm('Proceed')">Submit</button>
       </div>
    </form> 
 	</div> 	
 </div>
</div>
<?php include_once("bottombar.php"); ?>
</body>

<?
 include_once("../footer.php");
 ?