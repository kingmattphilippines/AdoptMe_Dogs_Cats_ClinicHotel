<?php include("conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt Me | Animals Sanctuary</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="index.php"></a><img src="image/logo.png" width="230px">
          </div>
          <nav>
            <ul id="MenuItems">
            <li><a href="index.php">HOME</a></li>
            <li><a href="all_pets.php">PETS</a></li>
            <!-- <li><a href="evaluation.php">EVALUATION</a></li> -->
            </ul>
          </nav>
          <a href="#"></a><img src="image/adopt.png" width="70px" height="50px">
          <img src="image/icon.png" class="menu-icon" 
			onclick="menutoggle()">
      </div>
        
        <!---------- all cats & dogs ---------->
	  <div class="small-container">
        <div class="row">
                <?php
                    $sql = "SELECT * FROM pets";
                    $query = $conn->query($sql);
                    $counter = 1;
                    while ($row = $query->fetch_assoc()) {
                ?>
                    <div class="col-4">
                        <?php if ($row['PET_DISPLAY'] == "") { ?>
                            <img src="upload/dog_icon.png" class="card-img-top" height="250" width="300" alt="..." style="border: 5px solid teal;">
                        <?php } else { ?>
                            <img src="upload/<?=$row['PET_DISPLAY'];?>" class="card-img-top" height="250" width="300" alt="..." style="border: 5px solid teal;">
                        <?php } ?>
                        <h2><center><?php echo $row['PET_NAME']; ?></center></h2>
                        <center><p><br><?php echo $row['PET_DESC']; ?></p></center>
                        <center><a href="pet_profile.php?q=<?=$row['ID'];?>" class="btn"><i>Click to know me more &#8594;</i></a></center>
                    </div>   
                <?php } ?>   
            </div>  
        </div> 
  <!---------------footer----------->
  
  <div class="footer">
	    <div class="container">
		    <div class="row">
			    <div class="footer-col-2">
				    <h3>Visit our Animals Santuary Website</h3>
					<p>Adopt Me!. </p>
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
					   <li>ABOUT</li>
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

  </body>
</html>