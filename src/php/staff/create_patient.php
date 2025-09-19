<?php
include 'db.php';

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$dob = $_POST['dob'];
$ssn = $_POST['ssn']; 
$phone = $_POST['phone_number'];
$email = $_POST['email'];
$address = $_POST['address'];

$stmt = $conn->prepare("INSERT INTO Patients (FirstName, LastName, DOB, PhoneNumber, Email, Address) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $first, $last, $dob, $phone, $email, $address);

if ($stmt->execute()) {
    echo "Patient created.";
} else {
    echo "Error: " . $stmt->error;
}
?>
