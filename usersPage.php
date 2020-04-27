<!DOCTYPE html>
<?php include('users.php'); ?>
<html>
<title>Usews pwage UwU</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {
  font-family: "Karma", sans-serif
  }
.w3-bar-block .w3-bar-item {
  padding:20px
  }

</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
</nav>

<!-- Top menu -->
<header class="w3-center w3-margin-bottom">
  <h1><b>BORTFOILIO GENERATOR</b></h1>

  <?php
    session_start();
    if(isset($_SESSION['username'])){

  ?>
      <b>Usews pwage UwU <?php echo $_SESSION['username']; echo $_SESSION['userID'] ?>, check some work from our beloved users >w< !</b><br><br>
      <a href="homepage.php"><button class="w3-button w3-grey w3-margin-right">HomePage</button></a>
      <a href='profile.php?userID=<?php echo $_SESSION['userID'];?>&&username=<?php echo $_SESSION['username'];?>&&professionID=<?php echo $_SESSION['professionID']?>'><button class="w3-button w3-indigo w3-margin-right">Profile</button></a>
      <a href="logout.php?logout"><button class="w3-button w3-red w3-margin-right">Logout</button></a>
      <a href="upload_page.php"><button class="w3-button w3-yellow">Upload a pic!</button></a>
      <a href="usersPage.php"><button class="w3-button w3-yellow">Browse users</button></a>

  <?php
    }
    else {

  ?>
      <b>Usews pwage UwU </b><br><br>
      <a href="homepage.php"><button class="w3-button w3-grey w3-margin-right">HomePage</button></a>
      <a href="signIn_Page.php"><button class="w3-button w3-green">Login</button></a>  
      <a href="signUp_Page.php"><button class="w3-button w3-blue">Register</button></a>
      <a href="usersPage.php"><button class="w3-button w3-yellow">Browse users</button></a>
 <?php
    }
    ?>


</header>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">     
  <h3>
    <?php
      $chunk = array_chunk($users, 3);
      foreach($chunk as $group){?>
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
            <?php foreach($group as $user){?>
              <div class="w3-third">
                <?php echo $user?>
              </div>
            <?php } ?>
        </div>
    <?php } ?>
  </h3>    
</div>
  

</body>
</html>
