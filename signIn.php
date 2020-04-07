<?php
session_start();
include('db.php');
if(isset($_POST['login'])) {

        $query="SELECT * FROM users,professions WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."' AND users.professionID = professions.professionID";
        $result=mysqli_query($conn, $query);
        if (!$result){
            echo "<br> Wrong user/pass </br>";
        }
        
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['userID']=$row['userID'];
            $_SESSION['username']=$row['username'];
            $_SESSION['displayname'] = $row['displayname'];
            $_SESSION['professionID'] = $row['professionID'];
            $_SESSION['professionName'] = $row['professionName'];
           header ("Location: homepage.php");
        }

    }


?>