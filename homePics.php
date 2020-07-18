
<?php
//localhost/porfolioGenerator/profile.php?userID=3&&userName=Elgay

//to get the data, you'll use $_GET["userID"] & $_GET["userName"]
include ('db.php');

$query="SELECT * FROM users,photos,professions WHERE users.userID=photos.userID AND users.professionID=professions.professionID";

$result=mysqli_query($conn, $query);
$cards = [];

while($row = mysqli_fetch_array($result)) {
    $userID = $row['userID'];
    $username = $row['username'];
    $professionID=$row['professionID'];
    $professionName=$row['professionName'];
    $photoName=$row['photoName'];
    $card = "
    
    <figure class='effect-zoe'>
    <img src='uploads/$username$userID/$photoName'>
    <figcaption>
      <h2>$username</h2>

      <p class='description'>$professionName</p>
    </figcaption>			
  </figure>
  ";





    // echo "<br>".$username;
    // echo "<br>".$displayname;

    array_push($cards, $card);
} 

?>