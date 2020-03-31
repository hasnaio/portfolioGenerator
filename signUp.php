<?php

include('db.php');

echo "<br>".$_POST["username"];
echo "<br>".$_POST["displayname"];
echo "<br>".$_POST["password"];
echo "<br>".$_POST["gender"]."<br>";

$username = $_POST["username"];
$password = $_POST["password"];

$query="INSERT INTO users (username, password, professionID, avatarID)
VALUES ('$username','$password',1,1)";


echo $query."<br>";

$result=mysqli_query($conn, $query);

if ($result) {
    echo "New record created successfully";
    header ("Location: homepage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>