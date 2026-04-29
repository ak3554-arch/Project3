<?php
$con = mysqli_connect("sql1.njit.edu", "ak3554", 't5$CS@VB%U#DV6Q', "ak3554");

if (!$con) {
    die("Connection failed");
}

$username = $_GET['username'];

$sql = "SELECT chat_message FROM Chat WHERE username = '$username'";
$result = mysqli_query($con, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo $row['chat_message'];
} else {
    echo "User not found";
}
?>