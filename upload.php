<?php
include "config.php";
include('db.php');

session_start();
if(isset($_POST['submit'])) {
    $pic=$_FILES['fileUpload'];
    $picName=$_FILES['fileUpload']['name'];
    $picTmpName=$_FILES['fileUpload']['tmp_name'];
    $picSize=$_FILES['fileUpload']['size'];
    $picError=$_FILES['fileUpload']['error'];
    $picType=$_FILES['fileUpload']['type'];
    $username=$_SESSION['username'];
    $userID=$_SESSION['userID'];
    $professionID=$_SESSION['professionID'];

    $picExt=explode('.', $picName);
    $picActualExt=strtolower(end($picExt));

    $allowed = array('jpg','jpeg','png');

    if (in_array($picActualExt, $allowed)) {
        if ($picError === 0) {

            $picDestination = 'uploads/'.$username.$userID;

            if(!file_exists('$picDestination')){
                mkdir('uploads/'.$username.$userID, 0777, true);    
            }

            $picDestination .= '/'.$picName;

            move_uploaded_file($picTmpName, $picDestination);

            $queryPic="INSERT INTO photos(userID, photoName)
            VALUES ('$userID','$picName')";

            mysqli_query($conn, $queryPic);

            header("location: profile.php?userID=$userID&&username=$username&&professionID=$professionID'");
        } else {
            echo "there was an error uploading your file)):";
        }
    } else {
        echo "you can't upload file of this type you scum D:<";
    }
}


?>