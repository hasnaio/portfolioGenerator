<?php

include ('db.php');

$query="SELECT * FROM avatars";

$result=mysqli_query($conn, $query);
$avatars="";
$avatars = [];

while($row = mysqli_fetch_array($result)) {
    $avatarID = $row['avatarID'];
    $avatarName = $row['avatarName'];

    $avatar = "<img src='$avatarName' alt='".$avatarName."'";
    array_push($avatars, $avatar);
    //push $photo into $photos array

} 

?>