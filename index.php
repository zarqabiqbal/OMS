 <?php
   session_start();
   $path = "oms/header.php";
   include_once($path);
   include_once("oms/connect.php");
   ?>
   <head><link rel="stylesheet" type="text/css" href="oms/style.css"></head>
<body>
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #80e5ff;">
        	<div class="container" align="center" >
    		    <h1><i class="fa fa-ambulance">Online Medical Shop</i></h1>
    		</div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="oms/signin.php"><i class="fa fa-sign-in"></i> Log In</a></li>
                   <p class="navbar-text">  </p>
             </ul>
    	</nav>
       <div class="container" >
        <div class="row">
          <div class="form_bg" style="margin-top:150px;background: #80e5ff">
            <form method="post" action="oms/register.php">
                 <h4 class="text-center">SignUp Page</h4>
                <br/>
                <div class="form-group">
                    <input type="text" class="form-control" name="uname" placeholder="Enter Username" required="" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="psw" minlength="6" placeholder="Enter Password" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required="">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="num"  min="1000000000" max="9999999999" placeholder="Enter number number" required="">
                <br/>
                <div class="align-center">
                    <button type="submit" class="btn btn-default" name="signup" onclick="return confirm('Confirm SignUp')"><i class="fa fa-user">SignUp</i></button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
   $path = "oms/footer.php";
   include_once($path);
?>