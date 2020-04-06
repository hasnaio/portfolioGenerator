<!DOCTYPE html>
<html>
<head>
    <title>homebage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="HoverEffectIdeas/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="HoverEffectIdeas/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="HoverEffectIdeas/css/set1.css" />
    

    <style>
      body,h1 {font-family: "Montserrat", sans-serif}
      img {margin-bottom: -7px}
      .w3-row-padding img {margin-bottom: 12px}
    </style>
</head>

<body>


<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<div class="w3-opacity">
<br>
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1><b>BORTFOILIO GENERATOR</b></h1>

  <?php
    session_start();
    if(isset($_SESSION['username'])){

  ?>
      <b>Welcome to Bortfoilio Generator <?php echo $_SESSION['username']; echo $_SESSION['userID'] ?>, check some work from our beloved users >w< !</b><br><br>
      <a href="profile.php"><button class="w3-button w3-indigo w3-margin-right">Profile</button></a>
      <a href="logout.php?logout"><button class="w3-button w3-red w3-margin-right">Logout</button></a>
      <a href="upload_page.php"><button class="w3-button w3-yellow">Upload a pic!</button></a>

  <?php
    }
    else {

  ?>
      <b>Welcome to Bortfoilio Generator, check some work from our beloved users >w< !</b><br><br>
      <a href="signIn_Page.php"><button class="w3-button w3-green">Login</button></a>  
      <a href="signUp_Page.php"><button class="w3-button w3-blue">Register</button></a>
 <?php
    }
    ?>


</header>
</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid">
  <div class="grid">
    <figure class="effect-zoe">
      <img src="bikchers/rocks.jpg">
      <figcaption>
        <h2>Creative <span>Zoe</span></h2>
        <p class="icon-links">
          <a href="#"><span class="icon-heart"></span></a>
          <a href="#"><span class="icon-eye"></span></a>
          <a href="#"><span class="icon-paper-clip"></span></a>
        </p>
        <p class="description">yadda yadda.</p>
      </figcaption>			
    </figure>

    <figure class="effect-zoe">
      <img src="bikchers/sound.jpg" style="width:100%">
      <figcaption>
        <h2>Creative <span>Zoe</span></h2>
        <p class="icon-links">
          <a href="#"><span class="icon-heart"></span></a>
          <a href="#"><span class="icon-eye"></span></a>
          <a href="#"><span class="icon-paper-clip"></span></a>
        </p>
        <p class="description">elsa kween.</p>
      </figcaption>			
    </figure>

    <figure class="effect-zoe">
      <img src="bikchers/woods.jpg" style="width:100%">
      <figcaption>
        <h2>Creative <span>Zoe</span></h2>
        <p class="icon-links">
          <a href="#"><span class="icon-heart"></span></a>
          <a href="#"><span class="icon-eye"></span></a>
          <a href="#"><span class="icon-paper-clip"></span></a>
        </p>
        <p class="description">yeet.</p>
      </figcaption>			
    </figure>

    <figure class="effect-zoe">
      <img src="bikchers/rock.jpg" style="width:100%">
      <figcaption>
        <h2>Creative <span>Zoe</span></h2>
        <p class="icon-links">
          <a href="#"><span class="icon-heart"></span></a>
          <a href="#"><span class="icon-eye"></span></a>
          <a href="#"><span class="icon-paper-clip"></span></a>
        </p>
        <p class="description">you can stop testing now.</p>
      </figcaption>			
    </figure>

    <figure class="effect-zoe">
      <img src="bikchers/nature.jpg" style="width:100%">
      <figcaption>
        <h2>Creative <span>Zoe</span></h2>
        <p class="icon-links">
          <a href="#"><span class="icon-heart"></span></a>
          <a href="#"><span class="icon-eye"></span></a>
          <a href="#"><span class="icon-paper-clip"></span></a>
        </p>
        <p class="description">this works ok.</p>
      </figcaption>			
    </figure>

    <figure class="effect-zoe">
      <img src="bikchers/mist.jpg" style="width:100%">
      <figcaption>
        <h2>Creative <span>Zoe</span></h2>
        <p class="icon-links">
          <a href="#"><span class="icon-heart"></span></a>
          <a href="#"><span class="icon-eye"></span></a>
          <a href="#"><span class="icon-paper-clip"></span></a>
        </p>
        <p class="description">i'm out of things to say.</p>
      </figcaption>			
    </figure>

    <!-- <a href="usersePage.html"><button class="w3-button w3-indigo" style="margin-right:25px; margin-left:25px;">View Users Profiles</button></a> -->

    
  </div>
</div>

<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"> 
</footer>
 

</body>
</html>
