<?php

//localhost/porfolioGenerator/profile.php?userID=3&&userName=Elgay

//to get the data, you'll use $_GET["userID"] & $_GET["userName"]
include('db.php');

$userID = (int)$_GET['userID'];
$professionID = (int)$_GET['professionID'];

$query="SELECT * FROM users, professions WHERE users.userID='$userID' AND professions.professionID='$professionID'";

$result=mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)) {
    $userID = $row['userID'];
    $username = $row['username'];
    $displayname = $row['displayname'];
    $professionName=$row['professionName'];
        
    // echo "<br>".$username;
    // echo "<br>".$displayname;
    // echo "<br>".$professionName;
} 

?>