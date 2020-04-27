<?php

include('db.php');
$query="SELECT * FROM professions";

$result=mysqli_query($conn, $query);
$options="";

while($row = mysqli_fetch_array($result)) {
    $professionID = $row['professionID'];
        if($_GET['professionID'] == $professionID){
            $options = $options."<option value=$professionID selected=selected>$row[1]</option>";
        }
        else {
            $options = $options."<option value=$professionID>$row[1]</option>";
        }
} 

?>