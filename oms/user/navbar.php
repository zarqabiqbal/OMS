<nav class="navbar navbar-default navbar-static-top" style="background: #80e5ff">
    <div class="container" align="center">
    <h1><i class="fa fa-ambulance">Online Medical Shop</i></h1><hr>
    </div>
    <nav class="nav nav-tabs" >
    <div class="container-fluid">
     <ul class="nav navbar-nav">
      <li ><a href="homepage.php"><i class="fa fa-home">Home</i></a></li>
      <li><a href="medicine.php"><i class="fa fa-medkit">Medicine</i></a></li>
      <li><a href="disease.php"><i class="fa fa-wheelchair">Disease</i></a></li>
      <li><a href="order.medicine.php">Order Medicine</a></li>
     </ul>
     <form class="navbar-form navbar-left" method="post" action="search.php">
      <div class="input-group">
       <input type="text" class="form-control" name="sinput" placeholder="Search Medicine">
        <div class="input-group-btn">
         <button class="btn btn-default" name="search">
          <i class="fa fa-search"></i>
         </button>
        </div>
       </div>
     </form>
     <ul class="nav navbar-nav navbar-right">
      <?php
        session_start();
        if (@$_SESSION["uname"]) {
          echo "<p class='navbar-text'><i class='fa fa-user'></i>Welcome ".$_SESSION["uname"]."</p>";
        }
      ?>
      <li><a href="logout.php"><i class="fa fa-sign-out">Logout</i></a></li>
    </ul>
    </div>
  </nav>
</nav>

