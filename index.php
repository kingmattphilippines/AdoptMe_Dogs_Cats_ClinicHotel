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
                    <a href="index.html"><img src="image/logo.png" width="300px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="all_pets.php">PETS</a></li>
                        <!-- <li><a href="evaluation.php">EVALUATION</a></li> -->
                    </ul>
                </nav>
                <a href="#l"></a><img src="image/adopt.png" width="70px" height="50px">
                <img src="image/icon.png" width="100px" height="50px" class="menu-icon" onclick="menutoggle()">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Welcome to Animals Sanctuary!</h1>
                    <a href="all_pets.php" class="btn">Adopt Now &#8680</a>
                </div>
                <div class="col-2">
                    <img src="image/homepic.png">
                </div>
            </div>
        </div>
    </div>
    
    <!---------- features categories ---------->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <h3>Testimony</h3><br>
                <img src="image/testimony.png" width="320" height="200">
            </div>
            <div class="col-3">
                <h3> <br> Videos</h3>
                <video width="320" height="240" controls>
                    <source src="video/video.mp4" type="video/mp4">
                    <!-- <source src="movie.ogg" type="video/ogg"> -->
                </video>
            </div>
            <div class="col-3">
                <h3>Tips</h3><br>
                <img src="image/tip2.png" width="320" height="200">
            </div>
        </div>  
    </div>
</div>

<!---------- features cats & dogs ---------->
<div class="small-container">
    <h1 class="title">Meet the Pets</h1>
        <div class="row">
            <?php
                $sql = "SELECT * FROM pets";
                $query = $conn->query($sql);
                $counter = 1;
                while ($row = $query->fetch_assoc()) {
            ?>
                <div class="col-4">
                    <?php if ($row['PET_DISPLAY'] == "") { ?>
                        <img src="upload/dog_icon.png" class="card-img-top" alt="..." style="border: 5px solid teal;">
                    <?php } else { ?>
                        <img src="upload/<?=$row['PET_DISPLAY'];?>" class="card-img-top" alt="..." style="border: 5px solid teal;">
                    <?php } ?>
                    <h2><?php echo $row['PET_NAME']; ?></h2>
                    <p><br><?php echo $row['PET_DESC']; ?></p>
                    <a href="pet_profile.php?q=<?=$row['ID'];?>" class="btn"><i>Click to know me more &#8594;</i></a>
                </div>   
            <?php } ?>   
        </div>     
    </div>

<!---------- about us ---------->
	  <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                     <img src="image/accbg.png" class="offer-img">
                </div>
                <div class="col-2">
                    <h1>About Us</h1>
                    <p>Animals Sanctuary!</p>
                    <small>Adopt Me.<small>
                </div>  
            </div>
        </div>
   </div>

<!--------------testimonial--------------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                       <i class="fa fa-quote-left"></i>  
                        <p>ADOPT.</p>
                          <div class="rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>
                          <img src="image/sasha.png">
                          <h3>Sasha<h3>
                    </div>
                     <div class="col-3">
                       <i class="fa fa-quote-left"></i>  
                        <p>Good service of Adopting. </p>
                          <div class="rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>
                          <img src="image/bo.png">
                          <h3>Bo<h3>
                     </div>
                      <div class="col-3">
                       <i class="fa fa-quote-left"></i>  
                        <p>Keep it Up.</p>
                          <div class="rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                          </div>
                          <img src="image/casey.png">
                          <h3>Casey<h3>
                      </div>
                </div>
            </div>
        </div>

<!------------------tips--------------->
<div class="tips">
    <div class="small-container">
    <h1 class="title">Tips for your Pet's Healthcares</h1>
        <div class="row">
           <div class="col-3">
               <img src="image/tip1.png">
           </div>
           <div class="col-3">
               <img src="image/tip2.png">
           </div>
           <div class="col-3">
               <img src="image/tip3.png">
           </div>
           <div class="col-3">
               <img src="image/tip4.png">
           </div>
           <div class="col-3">
               <img src="image/tip5.png">
           </div>
           <div class="col-3">
               <img src="image/tip6.png">
           </div>
        </div>
    </div>
  </div>

	<!---------------footer----------->
	
	<div class="footer">
	    <div class="container">
		    <div class="row">
			    <div class="footer-col-1">
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

</body>
</html>