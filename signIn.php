<?php
session_start();
include('db.php');
if(isset($_POST['login'])) {

        $query="SELECT * FROM users WHERE username = '".$_POST['username']."' AND password = '".$_POST['password']."'";
        $result=mysqli_query($conn, $query);

        if(mysqli_fetch_assoc($result)) {
            $_SESSION['username']=$_POST['username'];
            header ("Location: homepage.php");
        }
        else {
            echo "<br> wrong username and/or password";
        }


    }

?>