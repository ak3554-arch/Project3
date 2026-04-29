<?php
$con = mysqli_connect("sql1.njit.edu", "ak3554", 't5$CS@VB%U#DV6Q', "ak3554");

if (!$con) {
    die("Connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];
$message = $_POST['message'];

$sql = "UPDATE Chat 
        SET chat_message = '$message'
        WHERE username = '$username' 
        AND user_password = '$password'";

$result = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) > 0) {
    echo "Message sent";
} else {
    echo "Wrong username or password";
}
?>