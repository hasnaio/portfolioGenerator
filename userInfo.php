<?php

//localhost/porfolioGenerator/profile.php?userID=3&&userName=Elgay

//to get the data, you'll use $_GET["userID"] & $_GET["userName"]
include ('db.php');

$query="SELECT * FROM users WHERE userID =".$_GET["userID"];

$userProfession="SELECT * FROM professions WHERE professionID=".$_GET["professionID"];


$result=mysqli_query($conn, $query);

$profession=mysqli_query($conn,$userProfession);

if($professionRow=mysqli_fetch_array($profession)){
    $professionName = $professionRow['professionName'];
}

while($row = mysqli_fetch_array($result)) {
    $userID = $row['userID'];
    $displayname = $row['displayname'];

} 

?>