<!DOCTYPE html>
<?php 
include('users.php');
include('avatarPics.php');
 ?>
<html>
<head>
    <title>users</title>
    <title>Home || Portfolio Generator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    
    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .grid img{margin-bottom:-6px;opacity:0.7;transition: 0.4s;cursor:pointer}
    .grid img:hover{opacity:1}
    .w3-button{transition: 0.2s;margin-bottom:10px}    
    </style>
</head>

<body>
<?php
  session_start();
?>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-pale-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <?php 
    if(isset($_SESSION['username'])){
  ?>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Welcome,<br><?php echo $_SESSION['username'];?></b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="homepage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Home</a> 
    <a href="profile.php?userID=<?php echo $_SESSION['userID'];?>&&username=<?php echo $_SESSION['username'];?>&&professionID=<?php echo $_SESSION['professionID']?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Profile</a> 
    <a href="uploadPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Upload a Picture</a> 
    <a href="settingsPage.php?userID=<?php echo $_SESSION['userID'];?>&&username=<?php echo $_SESSION['username'];?>&&professionID=<?php echo $_SESSION['professionID']?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Profile Settings</a> 
    <a href="logout.php?logout" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Log Out</a>
  </div>

  <?php
    }
    else {
  ?>
    <div class="w3-container">
      <h3 class="w3-padding-64"><b>Welcome,<br>Guest</b></h3>
    </div>
    <div class="w3-bar-block">
    <a href="homepage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Home</a> 
    <a href="signUpPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Sign Up</a> 
    <a href="signInPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Sign In</a> 
  </div>
    <?php 
    }
    ?>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-pale-green w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-pale-green w3-margin-right" onclick="w3_open()">&#9776;</a>
  <span>Portfolio Generator</span>
</header>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" id="users" style="margin-top:35px">
    <h1 class="w3-jumbo"style="color:#206129"><b>Users</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
  </div>

  <!-- Users -->

   <?php
      $chunk = array_chunk($users, 4);
      foreach($chunk as $group){?>
        <div class='w3-row-padding w3-center'>
            <?php foreach($group as $user){?>
        <div class='w3-col m3 w3-margin-bottom'>
                <?php echo $user;?>
                </div>
            <?php } 
            ?>
  </div>
      <?php } ?>

 <!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"> 
</footer>
 
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

</script>


</body>
</html>