<?php

include ('db.php');
session_start(); 

$query="SELECT * FROM avatars WHERE user.avatarID =".$_GET["avatarID"];

$result=mysqli_query($conn, $query);
$avatarUsers="";
$avatarUsers = [];

while($row = mysqli_fetch_array($result)) {

    $avatarID = $row['avatarID'];
    $avatarName = $row['avatarName'];
    $avatarUser = "<img src='$avatarName' value='$avatarID' alt='".$avatarName."'";
    array_push($avatarUsers, $avatarUser);

} 


?>