<?php 
   include_once("connect.php");
   session_start();
      if (isset($_POST["signup"])) {
        $username = $_POST["uname"];
        $password = $_POST["psw"];
        $email = $_POST["email"];
        $num = $_POST["num"];
        $query="SELECT  * FROM login";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));
        while ($row=mysqli_fetch_array($result)) {
              if( $row['username']==$username) {
                		  $str="<script type='text/javascript'>alert('This Username Is Already Taken Try Diffrent Username');</script>";
                  		  echo $str;
                  		  ?><meta http-equiv="refresh" content="0; url=../"><?php
                }
               else if ($row['email']==$email) {
                  		  $str="<script type='text/javascript'>alert('This Email Is Already Taken Try Diffrent Email');</script>";
                  		  echo $str;
                  		  ?><meta http-equiv="refresh" content="0; url=../"><?php
                }
                elseif ($row['num']==$num) {
                  		  $str="<script type='text/javascript'>alert('This Number Is Already Taken Try Diffrent Number');</script>";
                  		  echo $str;
                  	      ?><meta http-equiv="refresh" content="0; url=../"><?php
                }
                else{
    
                     $query="INSERT INTO login(username,password,email,num) values('$username','$password','$email',$num)";
                     $result=mysqli_query($con,$query) or die(mysqli_error($con));
                     $_SESSION["num"]=$num;
                     $_SESSION["uname"]=$username;
                     header("Location: user/homepage.php");

                }
        } 
     }
?> 