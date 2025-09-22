<?php
$conn = new mysqli("localhost", "root", "", "hospital");

$eid = $_POST['eid'];
$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];

$query = "UPDATE employee SET password = '$newpass' WHERE eid = '$eid' AND password = '$oldpass'";
$conn->query($query);

echo "Password update attempted.";
?>
