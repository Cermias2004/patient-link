<?php
include 'db.php';

$appointment_id = $_POST['appointment_id'];

$stmt = $conn->prepare("DELETE FROM Appointments WHERE AppointmentID = ?");
$stmt->bind_param("i", $appointment_id);

if ($stmt->execute()) {
    echo "Appointment cancelled by staff.";
} else {
    echo "Error: " . $stmt->error;
}
?>
