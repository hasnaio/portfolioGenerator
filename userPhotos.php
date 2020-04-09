<?php

//localhost/porfolioGenerator/profile.php?userID=3&&userName=Elgay

//to get the data, you'll use $_GET["userID"] & $_GET["userName"]
include ('db.php');

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
    //push $photo into $photos array

} 


?>