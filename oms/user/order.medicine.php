<?php 
 include_once("../header.php");
 include_once("navbar.php");
 include_once("../connect.php");
 if (isset($_POST['order'])) {
 	  $uname = $_SESSION["uname"];
    $date = date("Y-m-d");
    $time = date("H:i:s");
    $medicine_name = $_POST['mn'];
    $quantity = $_POST['quantity'];
    $num = $_SESSION["num"];
    $address = $_POST['address'];
    $query="INSERT INTO order_detail(username,date,time,medicine_name,quantity,num,address) values('$uname','$date','$time','$medicine_name',$quantity,$num,'$address')";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));
    if ($result) {
    	   $str="<script type='text/javascript'>alert('Medicine Order Successful');</script>";
    	   echo $str;
    	 }
    
    else{
    	$str="<script type='text/javascript'>alert('Medicine Order Unsuccessful');</script>";
    	echo $str;
    }
 }
 ?>

 <div class="container" style="width: 500px;">
 	<div class="jumbotron" style="background: #80e5ff;">
      <div class="form-group">
      <form action="" method="post">
        <label for="mn">Medicine Name:</label>
          <input type="text" class="form-control" id="mn" name="mn" required>
      </div>
      <div class="form-group">
  		<label for="quantity">Quantity:</label>
   		  <input type="number" class="form-control" id="quantity" name="quantity" required>
	  </div>
    <div class="form-group">
      <label for="address">Address:</label>
        <textarea class="form-control" rows="7" id="address" name="address" required=""></textarea>
    </div>
 	  <br/>
      <div class="align-center">
          <button type="submit" class="btn btn-default" name="order" onclick="return confirm('Proceed Order')">Order</button>
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