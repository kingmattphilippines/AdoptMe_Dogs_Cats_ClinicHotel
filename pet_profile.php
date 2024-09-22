<?php 
include("conn.php"); 

if (isset($_GET['q'])) {
    $sql = "SELECT * FROM pets WHERE ID = '".$_GET['q']."'";
    $query = $conn->query($sql);
    if ($query->num_rows > 0) {
        $row = $query->fetch_array();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Me | Animals Sanctuary</title>
    <link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
       <div class="container">
           <div class="navbar">
               <div class="logo">
                   <a href="index.html"><img src="image/logo.png" width="230px"></a>
	           </div>
		           <nav>
		               <ul id="MenuItems">
                          <li><a href="index.php">HOME</a></li>
		                  <li><a href="all_pets.php">PETS</a></li>
		                  <!-- <li><a href="evaluation.php">EVALUATION</a></li> -->
                       </ul>
                   </nav>
		               <a href="#"><img src="image/adopt.png" width="70px" height="50px"></a>
						<img src="image/icon.png" width="100px" height="50px" class="menu-icon" onclick="menutoggle()">
           </div>
       </div>
	   <!---------------single chikay profile------------->
	   <div class="small-container single-profile">
	       <div class="row">
		       <div class="col-2">
                <?php if ($row[3] == "") { ?>
                    <img src="upload/dog_icon.png" class="card-img-top" width="100%" id="ProfileImg" alt="..." style="border: 5px solid teal;">
                <?php } else { ?>
                    <img src="upload/<?=$row[3];?>" class="card-img-top" width="100%" id="ProfileImg" alt="..." style="border: 5px solid teal;">
                <?php } ?>
                <!-- <a href="evaluation.php"class=""><h3>Adopt Me !</h3></a> -->
				<!-- added -->
				<div class="small-img-row">
					<?php
					for ($i = 4; $i <= 7; $i++) {
						$imagePath = $row[$i] ? "upload/" . $row[$i] : "upload/dog_icon.png";
					?>
						<div class="small-img-col"><br>
							<img src="<?= $imagePath ?>" class="card-img-top small-img" alt="..." style="border: 5px solid teal;">
						</div>
					<?php } ?>
				</div>
			  <!-- added -->
			  </div>
			  
			   <div class="col-2">
			   	   <h2><strong><?=$row[1]."'s";?> Profile</strong></h2>
			       <p><br><?=$row[2];?></p>
				   <a href="evaluation.php"class="btn btn-success"><h5>Adopt me now</h5></a>
				   &nbsp;&nbsp;
				   <a href="all_pets.php" class="btn btn-primary"><h5>View more pets</h5></a>	
			   </div>
		   </div>
	   </div>

	   
	   <!----------title------------>
	   <div class="small-container">
	       <div class="row row-2">
			   <!-- <a href="all_pets.php" class="btn btn-primary"><h3><u>View More</u></h3></a>	 -->
		   </div>
	   </div>


	<!---------------footer----------->
	
	<div class="footer">
	    <div class="container">
		    <div class="row">
			    <div class="footer-col-1">
				    <h3>Visit our Animals Santuary Website</h3>
					<p>Adopt Me!</p>
					 <div class="icon-logo">
						<img src="image/phone.png">
						<img src="image/mail.png">
						<img src="image/facebook.png">
					 </div>
				</div>
				<div class="footer-col-2">
				    <img src="image/adopt.png" width="400px" height="100px">
					<p>To sustainably the safetiness of our pets and love ones. </p>
				</div>
				<div class="footer-col-3">
				    <h3>Useful Links</h3>
					<ul>
					   <li>HOME</li>
					   <li>PETS</li>
					   <li>EVALUATION</li>
					</ul>
				</div>
			   <div class="footer-col-4">
				    <h3>Folllow Us</h3>
					<ul>
					   <li>Facebook</li>
					   <li>Twitter</li>
					   <li>Instagram</li>
					   <li>YouTube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p>Copyright 2023 - Adopt Me"</p>
		</div>
	</div>
	
	<!---------------js for toggle menu------------>
	<script>
	    var MenuItems = document.getElementById("MenuItems");
		
		MenuItems.style.maxHeight = "0px";
		
		function menutoggle(){
		    if(MenuItems.style.maxHeight == "0px")
			   {
			        MenuItems.style.maxHeight = "200px";
			   }
		   else{
		            MenuItems.style.maxHeight = "0px";
		       }   
		}
	</script>
	
	<!----------js for profile gallery --------------->
	<script>
		var ProfileImg = document.getElementById("ProfileImg");
		var SmallImg = document.getElementsByClassName("small-img");

		for (var i = 0; i < SmallImg.length; i++) {
			SmallImg[i].onclick = function () {
				ProfileImg.src = this.src;
			};
		}
	</script>
	 
</body>
</html>