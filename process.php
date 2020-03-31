<?php
require_once('db.php');
    if(isset($_POST['login'])) {

        $query="SELECT * FROM users WHERE username'".$_POST['username']."' AND 	password'".$_POST['password']."'";
        $result=mysqli_query($conn, $query);

        if($result) {
            $_SESSION['user']=$_POST['username'];
            header("location:homepage.php");
        }

    }

?>