<!DOCTYPE html>
<?php 
    include('professions.php'); 
    include('infoUpdate.php'); 
?>
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>


<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6><?php echo $_SESSION['username']?></h6>
          
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
          <?php
            if(@$_GET['alert']==true) {
              ?>
              <div class="alert-light"><?php echo $_GET['alert']?></div>
            <?php 
            }
          ?>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" action="infoUpdate.php?userID=<?php echo $_SESSION['userID'];?>&&username=$username&&professionID=$professionID" method="POST" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Display Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="displayname" value="<?php echo $_SESSION['displayname'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="username" value="<?php echo $_SESSION['username'];?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Profession:</label>
            <div class="col-lg-8">
                <select id="professions" name="profession" class="form-control">
                <?php echo $options;?>
                </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" name="updateProfile" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Reset Changes">
              <span></span>
              <a href='profile.php?userID=<?php echo $_SESSION['userID'];?>&&username=<?php echo $_SESSION['username'];?>&&professionID=<?php echo $_SESSION['professionID']?>'><input type="button" name="backToProfile" class="btn btn-primary" value="Back to Profile"></a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:335px"> 
</footer>

 

</body>
</html>
