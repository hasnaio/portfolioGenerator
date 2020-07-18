<!DOCTYPE html>
<?php 
    include('professions.php'); 
    include('db.php');
    include('avatarPics.php'); 
    ?>
<html lang="en">
    <head>
    <title> Sign Up || Portfolio Generator</title>
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
    <div class="w3-container">
      <h3 class="w3-padding-64"><b>Welcome,<br>Guest</b></h3>
    </div>
    <div class="w3-bar-block">
    <a href="homepage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Home</a> 
    <a href="usersPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Browse Users</a> 
    <a href="signUpPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Sign Up</a> 
    <a href="signInPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Sign In</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-pale-green w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-pale-green w3-margin-right" onclick="w3_open()">&#9776;</a>
  <span>Portfolio Generator</span>
</header>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<!-- Header -->
  <div class="w3-container" style="margin-top:55px" id="signup">
    <h1 class="w3-jumbo"style="color:#206129"><b>Sign Up</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
  </div>
  <form action="signUp.php" class="w3-row-padding" method="POST">
        <div class="w3-section">
          <label>Username</label>
          <input class="w3-input w3-border" type="text" name="username" required>
        </div>

        <div class="w3-section">
          <label>Display Name</label>
          <input class="w3-input w3-border" type="text" name="displayname" required>
        </div>

        <div class="w3-section">
          <label>Password</label>
          <input class="w3-input w3-border" type="password" name="password" required>
        </div>

        <div class="w3-section">
          <label>Profession</label>
            <select class="w3-select w3-border" id="professions" name="professions" required>
                <?php echo $options;?>
            </select required>
        </div>

        <label>Choose a Profile Picture</label>
        <br><br>
            <?php 
            foreach($avatars as $ava)
                {?>
                <?php echo $ava;
            }?>

        <br><br>

        <button class="w3-button w3-padding-large w3-green w3-margin-bottom w3-margin-right">Sign Up</button>
        </form>
        </div>

        <!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:30px"> 
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