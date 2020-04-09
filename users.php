<?php

//localhost/porfolioGenerator/profile.php?userID=3&&userName=Elgay

//to get the data, you'll use $_GET["userID"] & $_GET["userName"]
include ('db.php');

$query="SELECT * FROM users";

$result=mysqli_query($conn, $query);
$users="";
$users = [];

while($row = mysqli_fetch_array($result)) {
    $userID = $row['userID'];
    $username = $row['username'];
    $displayname = $row['displayname'];
    $user = "<a href='profile.php?userID=$userID&&username=$username'>$username</a><br>";
    // echo "<br>".$username;
    // echo "<br>".$displayname;

    array_push($users, $user);
} 



?>