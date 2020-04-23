<style>
    .leftColumn {
        
    float:left;
    width: 30%;
    padding: 10px;
    padding-bottom: 50px;  
    }

    .middleColumn {
    float:left;
    width: 30%;
    padding: 10px;
    padding-left: 100px;
    padding-bottom: 50px;          
    }

    .rightColumn {
    float:left;
    width: 30%;
    padding: 10px;
    padding-left: 120px;
    padding-bottom: 50px;          
    }

</style>

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
    
    if ($i % 3 == 0){?>
        <div class="leftColumn"> <?php }
    else if ($i % 3 == 1){?>
        <div class="middleColumn"> <?php }
    else if ($i % 3 == 2){?>
        <div class="rightColumn"> <?php } ?>   
            
            <div class="user">
            <?php echo $user;
                ?>
            </div>
            
        </div> <?php
    $i++;
    // echo "<br>".$username;
    // echo "<br>".$displayname;

    array_push($users, $user);
}

?>
