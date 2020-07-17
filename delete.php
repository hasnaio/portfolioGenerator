<?php
include('db.php');
if (isset($_POST['deleteProfile'])) {
    
    $userID = isset($_GET['userID']) ? $_GET['userID'] : '';
    $query_user="DELETE FROM users WHERE userID = '$userID'";
    $query_photos="DELETE FROM photos WHERE userID = '$userID'";

    echo "User ID IS: ".$userID;
    $result=mysqli_query($conn, $query_user);
    $result2=mysqli_query($conn, $query_photos);

    if ($result && $result2) {
        echo "Records were deleted successfully.";
        session_destroy();
        header('location:logout.php?deleteProfile=1');
    }
    else {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
}
?>