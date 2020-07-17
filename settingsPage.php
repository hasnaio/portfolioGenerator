<!DOCTYPE html>
<?php 
    include('professions.php'); 
    include('infoUpdate.php');
    include('delete.php');  
?>
<html lang="en">
<head>
    <title> <?php echo $_GET['username'];?>'s Settings || Portfolio Generator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .grid img{margin-bottom:-6px;opacity:0.7;transition: 0.4s;cursor:pointer}
    .grid img:hover{opacity:1}
    .w3-button{transition: 0.2s;margin-bottom:10px}    
    </style>
</head>

<body>

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
    <a href="usersPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Browse Users</a> 
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
    <a href="usersPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Browse Users</a> 
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
  <div class="w3-container" style="margin-top:55px" id="settings">
    <h1 class="w3-jumbo"style="color:#206129"><b>User Settings</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
  </div>

  <form action="infoUpdate.php?userID=<?php echo $_SESSION['userID'];?>&&username=$username&&professionID=$professionID&&avatarID=$avatarID" class="w3-row-padding" method="POST" role="form">
    <h3>Personal info</h3>
        <div class="w3-section">
          <label>Display Name</label>
          <input class="w3-input w3-border" type="text" name="displayname" value="<?php echo $_SESSION['displayname'];?>">
        </div>

        <div class="w3-section">
          <label>Username</label>
          <input class="w3-input w3-border" type="text" name="username" value="<?php echo $_SESSION['username'];?>">
        </div>

        <div class="w3-section">
          <label>Profession</label>
          <select class="w3-input w3-border" type="text" name="profession">
          <?php echo $options;?>
                </select>
        </div>

        <button type="submit" name="updateProfile" class="w3-button w3-padding-large w3-green w3-margin-bottom w3-margin-right">Save Changes</button>
        <button type="reset" class="w3-button w3-padding-large w3-black w3-margin-bottom w3-margin-right">Reset Changes</button>
        <button type="button" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-padding-large w3-red w3-margin-bottom w3-margin-right">Delete User</button>
        </form>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:60px"> 
</footer>

 <!-- Modal -->
<form class="form-horizontal" action="delete.php?userID=<?php echo $_SESSION['userID']; ?>" method="POST" role="form">

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-red"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Delete User</h2>
      </header>
      <div class="w3-container">
        <br><h5>Clicking the Red button will delete your profile and all your data. Are you sure you want to continue?</h5>
      </div>
      <footer class="w3-container">
        <p>
        <a href='delete.php?userID=<?php echo $_SESSION['userID'];?>'>
          <button type="submit" class="w3-button w3-padding-large w3-red w3-margin-bottom w3-margin-right" name="deleteProfile">Confirm</button>
        </a>
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-padding-large w3-black w3-margin-bottom w3-margin-right">Close</button>
        </p>
      </footer>
    </div>
  </div>
  </form>

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

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>


</body>
</html>
