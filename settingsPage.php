<!DOCTYPE html>
<?php 
    include('professions.php'); 
    include('infoUpdate.php');
    include('delete.php');  
?>
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
              <a href='profile.php?userID=<?php echo $_SESSION['userID'];?>&&username=<?php echo $_SESSION['username'];?>&&professionID=<?php echo $_SESSION['professionID']?>'>
                <input type="button" name="backToProfile" class="btn btn-primary" value="Back to Profile">
              </a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  DELETE USER
              </button>              
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

<br />

 <!-- Modal -->
<form class="form-horizontal" action="delete.php?userID=<?php echo $_SESSION['userID']; ?>" method="POST" role="form">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Press red button to delete your profile and everything!!!!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href='delete.php?userID=<?php echo $_SESSION['userID'];?>'>
          <button type="submit" name="deleteProfile" class="btn btn-danger">Yes, Delete!</button>
        </a>
      </div>
    </div>
  </div>
</div>
</form>

</body>
</html>
