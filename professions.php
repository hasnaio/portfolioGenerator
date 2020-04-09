<?php

include('db.php');
$query="SELECT * FROM professions";

$result=mysqli_query($conn, $query);
$options="";

while($row = mysqli_fetch_array($result)) {
    $professionID = $row['professionID'];
    $options = $options."<option value=$professionID>$row[1]</option>";
} 


?>