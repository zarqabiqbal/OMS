<?php
 include_once("../header.php");
 include_once("navbar.php");
 ?>
 <head>
 	 <meta name="viewport" content="width=device-width, initial-scale=1">
     
 </head>
 
 <body >
 <div class="w3-content w3-section" align="center" style="max-width: 100%;">
  <img class="mySlides w3-animate-right" src="../pic/m1.jpg" width="90%" height="430px">
  <img class="mySlides w3-animate-right" src="../pic/m2.jpg" width="90%" height="430px">
  <img class="mySlides w3-animate-right" src="../pic/m3.jpg" width="90%" height="430px">
  <img class="mySlides w3-animate-right" src="../pic/m4.jpg" width="90%" height="430px">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>
<?php include_once("bottombar.php");?>
</body>
<?
 include_once("../footer.php");
 ?>