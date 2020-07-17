<?php

include ('db.php');

$query="SELECT * FROM avatars";

$result=mysqli_query($conn, $query);
$avatars="";
$avatars = [];

while($row = mysqli_fetch_array($result)) {
    $avatarID = $row['avatarID'];
    $avatarName = $row['avatarName'];
    $avatarImage = "<img src='$avatarName' alt='".$avatarName."'";

    $avatar = "<input class='w3-radio' type='radio' name='avatar' value='$avatarID' required><label>  $avatarImage  </label>";

    array_push($avatars, $avatar);

} 

?>