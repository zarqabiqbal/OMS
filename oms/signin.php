 <?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path = "header.php";
   include_once($path);
   include_once("connect.php");
   session_start();
      if (isset($_POST["lgn"])) {
        $username = $_POST["uname"];
        $password = $_POST["psw"];
        $query="SELECT user_id,username,password,num FROM login";
        $result = mysqli_query($con,$query) or die(mysqli_error());
        $count=mysqli_num_rows($result);
        if($count>0){
                  $str="<script type='text/javascript'>alert('You Are Not Yet Registered');</script>";
                  echo $str;
               }
        while ($row=mysqli_fetch_assoc($result)) {
        	  if( ($row['user_id']==1) && ($row['username']==$username) && ($row['password']==$password) )
        	  {
                $_SESSION["uname"]=$username;
                header("Location: admin/homepage.php");
        	  }
              else if( ($row['username']==$username) && ($row['password']==$password) ) {
                $_SESSION["uname"]=$username;
                $_SESSION["num"]=$row['num'];
                header("Location: user/homepage.php");
               }
               
             } 
   }
 ?>
<body>
        <nav class="navbar navbar-default navbar-static-top" style="background: #80e5ff;">
        	<div class="container" align="center">
    		    <h1><i class="fa fa-ambulance">Online Medical Shop</i></h1>
    		</div>
            <ul class="nav navbar-nav navbar-right" >
              <li><a href="../"><i class="fa fa-user"></i> SignUp</a></li>
                   <p class="navbar-text">  </p>
             </ul>
    	</nav>
       <div class="container">
        <div class="row">
          <div class="form_bg" style="margin-top:150px;background: #80e5ff">
            <form method="post">
                 <h2 class="text-center">Login Page</h2>
                <br/>
                <div class="form-group">
                    <input type="text" class="form-control" name="uname" placeholder="Enter Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="psw" placeholder="Enter Password" required="">
                </div>
                <br/>
                <div class="align-center">
                    <button type="submit" class="btn btn-default" name="lgn" onclick="return confirm('Confirm Login')"><i class="fa fa-sign-in">Login</i></button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
   $path = "footer.php";
   include_once($path);
?>