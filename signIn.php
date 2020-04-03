<?php
session_start();
include('db.php');
if(isset($_POST['login'])) {

        $query="SELECT * FROM users WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
        $result=mysqli_query($conn, $query);
        if (!$result){
            echo "<br> Wrong user/pass </br>";
        }
        
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['username']=$row['username'];
            $_SESSION['displayname'] = $row['displayname'];
            header ("Location: homepage.php");
        }



    }

?>