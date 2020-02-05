<?php 
 include_once("../header.php");
 include_once("navbar.php");
 include_once("../connect.php")
 ?>

 <div  style=" margin-left: 15px;" align="left">
 	<div class="jumbotron" style="background: white;">
 		<?php 
             $query="SELECT disease_name from disease order by disease_name";
             $result = mysqli_query($con,$query) or die(mysqli_error());
             echo "<h4><ul>";
             while ($row=mysqli_fetch_assoc($result)) {
             $dn=$row['disease_name'];
             echo "<a href='disease.desc.php?dn=$dn'><li>".$row['disease_name']."</li></a><br><br><br>";
             }
        	 echo "</ul></h4>";
        ?>
 	</div> 	
 </div>


 

<?php include_once("bottombar.php"); ?>
</body>
<?
 include_once("../footer.php");
 ?>