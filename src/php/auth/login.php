<?php
include 'db.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM Patients WHERE Email = ? OR PhoneNumber = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $_SESSION['user'] = $result->fetch_assoc();
    echo "Login successful.";
} else {
    echo "Invalid credentials.";
}
?>
