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
    $user = "<a href='profile.php?userID=$userID&&username=$username&&professionID=$professionID'>$username</a><br>";
    
    $i++;
    // echo "<br>".$username;
    // echo "<br>".$displayname;

    array_push($users, $user);
}

?>
