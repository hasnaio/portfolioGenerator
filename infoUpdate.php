<?php
include('db.php');
session_start();
if (isset($_POST['updateProfile'])) {
 $userID = (int)$_GET['userID'];
 $oldname = "uploads/".$_SESSION['username'].$userID;
 $displayname = $_POST['displayname'];
 $username = $_POST['username'];
 $professionID = $_POST['profession'];
 echo $_SESSION['username'];
 
 $query="UPDATE users SET displayname = '$displayname', username = '$username', professionID = '$professionID' WHERE userID = '$userID'";
 
 $result=mysqli_query($conn, $query);
 
 if ($result) {
   $newname = "uploads/".$username.$userID;
  if (file_exists($oldname)) {
    rename($oldname, $newname);
}
      $_SESSION['username']=$username;
      $_SESSION['displayname']=$displayname;
      $_SESSION['professionID']=$professionID;
      header("Location:settingsPage.php?userID=$userID&&username=$username&&professionID=$professionID");
  } 
}
?>