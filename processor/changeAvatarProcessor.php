<?php
$id = $_POST["id"];
if (is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "avatars/user-$id.jpg");
    header("location: ../profile.php?status=success"); //add a parameter here with a success statmenet
} else {
    print "Error: required file not uploaded";
}