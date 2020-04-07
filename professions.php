<?php

include('db.php');
$query="SELECT * FROM 'professions'";

$result=mysqli_query($conn, $query);
$options="";

while($row = mysqli_fetch_array($result)) {
    $options = $options."<option>$row[1]</option>";
} 


?>