<?php 
include("conn.php"); 
include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Adopt Me</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- added -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-blue w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">ADOPT ME <i class="fa fa-paw fa-fw"></i></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4 w3-center">
      <img src="image/admin_avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">Greetings!</div>
    <div class="w3-col s8 w3-bar w3-left">
      <span><strong><?=$user['NAME'];?></strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5><strong>DASHBOARD</strong></h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="admin_dashboard.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-dashboard fa-fw"></i>  Overview</a>
    <a href="admin_add_pets.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-paw fa-fw"></i>  Add Pets</a>
    <a href="admin_evaluation.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-clipboard fa-fw"></i>  Evaluation</a>
    <a href="admin_logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-arrow-left fa-fw"></i>  Logout</a><br><br>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h2><b><i class="fa fa-dashboard"></i> Dashboard</b></h2>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-paw w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h1>
            <?php
            $sql = "SELECT * FROM pets";
            $query = $conn->query($sql);
            echo "<h1>".$query->num_rows."</h1>";
            ?>
          </h1>
        </div>
        <div class="w3-clear"></div>
        <h4>Pets</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-clipboard w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h1>
            <?php
            $sql = "SELECT * FROM evaluation";
            $query = $conn->query($sql);
            echo "<h1>".$query->num_rows."</h1>";
            ?>
          </h1>
        </div>
        <div class="w3-clear"></div>
        <h4>Evaluation</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-gray w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h1>
            <?php
            $sql = "SELECT * FROM admins";
            $query = $conn->query($sql);
            echo "<h1>".$query->num_rows."</h1>";
            ?>
          </h1>
        </div>
        <div class="w3-clear"></div>
        <h4>Admin</h4>
      </div>
    </div>
  </div>
  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>