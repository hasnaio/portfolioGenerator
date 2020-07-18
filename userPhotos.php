<?php

include ('db.php');
session_start(); 

$query="SELECT * FROM photos WHERE userID =".$_GET["userID"];

$result=mysqli_query($conn, $query);
$photos="";
$photos = [];

while($row = mysqli_fetch_array($result)) {
    $userID = $row['userID'];
    $photoName = $row['photoName'];
    $username = $_GET['username'];

    $photo = "<img src='uploads/".$username.$userID."/".$photoName."' alt='".$photoName."' class='w3-image' width='1000' height='500'>";
    array_push($photos, $photo);

} 


?>