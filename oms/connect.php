<?php

 $con=mysqli_connect('localhost','root','') or die('Failed to connect to MySQL : ' .mysqli_error());
 $db=mysqli_select_db($con,'oms') or die('Failed to connect to MySQL : ' .mysqli_error($con) );

 ?>