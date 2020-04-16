<?php

include ('db.php');

$query="SELECT * FROM users, photos, professions WHERE users.userID=photos.userID AND professions.professionID=users.professionID";
$table='<table cellpadding ="120"';
$i=0;
$result=mysqli_query($conn, $query);
$users = [];

while($row = mysqli_fetch_array($result)) {
    $userID = $row['userID'];
    $username = $row['username'];
    $professionID=$row['professionID'];
    $professionName=$row['professionName'];
    $user = "<a href='profile.php?userID=$userID&&username=$username&&professionID=$professionID'>$username</a><br>";

    

    if ($i%3 == 0) {
        $table .= '<tr><td>'.$user.$professionName.'</td>';
    } else {
        $table .= '<td>'.$user.$professionName.'</td>';
    }
    $i++;
    // echo "<br>".$username;
    // echo "<br>".$displayname;

    array_push($users, $user);
}
$table.='</tr></table>';

?>

