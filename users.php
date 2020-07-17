<?php

include ('db.php');

$query="SELECT * FROM users";

$result=mysqli_query($conn, $query);


$i=0;
$users = [];

while($row = mysqli_fetch_array($result)) {
    $userID = $row['userID'];
    $username = $row['username'];
    $professionID=$row['professionID'];
    $avatarID=$row['avatarID'];

    $queryProf="SELECT * FROM professions WHERE professionID=$professionID";
    $queryAva="SELECT * FROM avatars WHERE avatarID=$avatarID";
    $resultP=mysqli_query($conn, $queryProf);
    $resultA=mysqli_query($conn, $queryAva);
    if($rowP = mysqli_fetch_array($resultP)) {
    $professionName=$rowP['professionName'];

    if($rowA = mysqli_fetch_array($resultA)) {

    $avatarID = $rowA['avatarID'];
    $avatarName = $rowA['avatarName'];
    $avatarPic = "<img src='$avatarName' alt='".$avatarName."'";

    $user = "<a href='profile.php?userID=$userID&&username=$username&&professionID=$professionID'>$avatarPic <br><br> $username <br> $professionName</a><br>";
    
    $i++;
    // echo "<br>".$username;
    // echo "<br>".$displayname;

    array_push($users, $user);
    }
}
    else {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
}

?>
