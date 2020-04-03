<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">
    <title>Portfolio Generator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../favicon.ico">

    <body>
    <!-- Header -->
    <header class="w3-display-container w3-content w3-center" style="max-width:1500px">
        <img class="w3-image" src="bikchers/photographer.jpg" alt="Me" width="1500" height="600">
        <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
            <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge"><?php echo $_SESSION["displayname"]; ?></h1>
            <h5 class="w3-hide-large" style="white-space:nowrap"><?php echo $_SESSION["displayname"]; ?></h5>
            <h3 class="w3-hide-medium w3-hide-small">PHOTOGRAPHER</h3>
        </div>

        <!-- Navbar (placed at the bottom of the header image) -->
        <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
            <a href="homepage.php" class="w3-bar-item w3-button">Home</a>
            <a href="usersePage.html" class="w3-bar-item w3-button">Users</a>
            <?php
                if(isset($_SESSION['username'])){
                    echo'<a href="upload_page.php" class="w3-bar-item w3-button">Upload</a>';
                }
            ?>
            
        </div>
    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding-large w3-margin-top" id="portfolio">

    <!-- Images (Portfolio) -->
    <img src="bikchers/ocean.jpg" alt="Ocean" class="w3-image" width="1000" height="500">
    <img src="bikchers/ocean2.jpg" alt="Ocean II" class="w3-image w3-margin-top" width="1000" height="500">
    <img src="bikchers/falls2.jpg" alt="Falls" class="w3-image w3-margin-top" width="1000" height="500">
    <img src="bikchers/mountainskies.jpg" alt="Skies" class="w3-image w3-margin-top" width="1000" height="500">
    <img src="bikchers/mountains2.jpg" alt="Mountains" class="w3-image w3-margin-top" width="1000" height="500">

    <!-- End page content -->
    </div>

    
    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:100px"> 
        <i class="fa fa-facebook-official w3-hover-opacity w3-margin-right"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-margin-right"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-margin-right"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-margin-right"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-margin-right"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </footer>
    </body>
</html>