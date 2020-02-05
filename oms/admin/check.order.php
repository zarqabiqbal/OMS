<?php 
 include_once("../header.php");
 include_once("navbar.php");
 include_once("../connect.php");


 
 ?>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div ciass="jumbotron">
<table border="1">
  <tr>
    <th>Order_id</th>
    <th>Username</th>
    <th>Medicine name</th>
    <th>Quantity</th>
    <th>Time</th>
    <th>Date</th>
    <th>Number</th>
    <th>Address</th>
  </tr>
  <?php
   $query="SELECT * FROM order_detail";
   $result=mysqli_query($con,$query)  or die(mysqli_error());
    while ($row=mysqli_fetch_assoc($result)) {
   echo '<tr>';
   echo  '<td>'.$row['order_id'].'</td>';
   echo  '<td>'.$row['username'].'</td>';
   echo  '<td>'.$row['medicine_name'].'</td>';
   echo  '<td>'.$row['quantity'].'</td>';
   echo  '<td>'.$row['time'].'</td>';
   echo  '<td>'.$row['date'].'</td>';
   echo  '<td>'.$row['num'].'</td>';
   echo  '<td>'.$row['address'].'</td>';
   echo  '</tr>';
   }
  ?>


</table> 
</div>

 

<?php include_once("bottombar.php"); ?>
</body>
<?
 include_once("../footer.php");
 ?