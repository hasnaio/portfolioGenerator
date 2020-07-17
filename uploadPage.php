<!DOCTYPE html>
<html lang="en">
<head>
    <title> Upload || Portfolio Generator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    <style>
    body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
    body {font-size:16px;}
    .grid img{margin-bottom:-6px;opacity:0.7;transition: 0.4s;}
    .grid img:hover{opacity:1}
    .w3-button{transition: 0.2s;margin-bottom:10px}    
    .imagePreview {
        border:2px solid #dddddd;
        display:flex;
        align-items:center;
        justify-content:center;
        font-weight:bold;
        color: #cccccc;
    }
    .imagePreviewImage {
        display:none;
        width:100%;
    }
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
    <a href="usersPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Browse Users</a> 
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
    <a href="usersPage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Browse Users</a> 
    <a href="signUp_Page.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black ">Sign Up</a> 
    <a href="signIn_Page.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white ">Sign In</a> 
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
<div class="w3-container" style="margin-top:55px" id="upload">
    <h1 class="w3-jumbo"style="color:#206129"><b>Upload</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
</div>
<form action="upload.php" method="POST"  class="w3-row-padding w3-center" enctype="multipart/form-data">
        <div class="w3-row-padding w3-center">
            <div class="w3-center w3-margin-bottom">
                <div class="w3-half w3-margin-bottom">
                    <div class="w3-ul w3-light-grey">
                        <p class="w3-dark-grey w3-xlarge w3-padding-32">Upload your picture here</p>
                        <p><input type="file" class="w3-padding-large" name="fileUpload" id="fileUpload" style="width:100%" required></p>
                        <div class="imagePreview w3-center w3-margin w3-padding-32" id="imagePreview">
                            <img src="" alt="image preview" class="imagePreviewImage">
                            <span class="imagePreviewDefaultText">Your image will be previewed here</span>
                        </div>
                        <button type="submit" name="submit" class="w3-button w3-green w3-button w3-hover-grey w3-padding-large">Upload</button>
                    </div>
                </div>
            </div>
        </div>
</form>
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

// image preview script
    const fileUpload = document.getElementById("fileUpload");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".imagePreviewImage");
    const previewDefaultText = previewContainer.querySelector(".imagePreviewDefaultText");
    
    fileUpload.addEventListener("change", function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            previewDefaultText.style.display="none";
            previewImage.style.display="block";
            reader.addEventListener("load", function() {
                console.log(this);
                previewImage.setAttribute("src", this.result);     
            });
            reader.readAsDataURL(file);
        }
    });
</script>

    </body>
</html> 