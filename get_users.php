<?php
$con = mysqli_connect("sql1.njit.edu", "ak3554", 't5$CS@VB%U#DV6Q', "ak3554");

if (!$con) {
    die("Connection failed");
}

$sql = "SELECT username FROM Chat";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['username'] . "<br>";
}
?>