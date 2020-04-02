<?php

if(isset($_POST['submit'])) {
    $pic=$_FILES['fileUpload'];
    $picName=$_FILES['fileUpload']['name'];
    $picTmpName=$_FILES['fileUpload']['tmp_name'];
    $picSize=$_FILES['fileUpload']['size'];
    $picError=$_FILES['fileUpload']['error'];
    $picType=$_FILES['fileUpload']['type'];

    $picExt=explode('.', $picName);
    $picActualExt=strtolower(end($picExt));

    $allowed = array('jpg','jpeg','png');

    if (in_array($picActualExt, $allowed)) {
        if ($picError === 0) {
            $picNameNew=uniqid('', true).".".$picActualExt;
            $picDestination='uploads/'.$picNameNew;
            move_uploaded_file($picTmpName, $picDestination);
            header("location: profile.php?uploadsuccess");
        } else {
            echo "there was an error uploading your file)):";
        }
    } else {
        echo "you can't upload file of this type you scum D:<";
    }
}


?>