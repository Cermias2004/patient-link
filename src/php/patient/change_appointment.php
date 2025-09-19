<?php
include 'db.php';

$appointment_id = $_POST['appointment_id'];
$new_date = $_POST['new_date'];
$new_time = $_POST['new_time'];
$new_datetime = $new_date . ' ' . $new_time;

$stmt = $conn->prepare("UPDATE Appointments SET AppointmentTime = ? WHERE AppointmentID = ?");
$stmt->bind_param("si", $new_datetime, $appointment_id);

if ($stmt->execute()) {
    echo "Appointment updated.";
} else {
    echo "Error: " . $stmt->error;
}
?>
