<?php

include('db.php');

echo "<br>".$_POST["username"];
echo "<br>".$_POST["displayname"];
echo "<br>".$_POST["password"]."<br>";

$username = $_POST["username"];
$password = $_POST["password"];
$displayname = $_POST["displayname"];
$professionID = $_POST["professions"];
$avatarID = $_POST["avatar"];

$query="INSERT INTO users (username, password, displayname, professionID, avatarID)
VALUES ('$username','$password', '$displayname', '$professionID','$avatarID')";


echo $query."<br>";

$result=mysqli_query($conn, $query);

if ($result) {
    echo "New record created successfully";
    header ("Location: homepage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>