<?php
    session_start();

    if(isset($_GET['logout']) || isset($_GET['deleteProfile'])) {
        session_destroy();
        header('location:homepage.php');
    }

?>