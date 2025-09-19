<?php
include 'db.php';

$patient_id = $_POST['patient_id'];
$doctor_id = $_POST['doctor_id'];
$date = $_POST['appointment_date'];
$time = $_POST['appointment_time'];
$reason = $_POST['reason'];
$datetime = $date . ' ' . $time;

$stmt = $conn->prepare("INSERT INTO Appointments (PatientID, DoctorID, AppointmentTime, Reason) VALUES (?, ?, ?, ?)");
$stmt->bind_param("iiss", $patient_id, $doctor_id, $datetime, $reason);

if ($stmt->execute()) {
    echo "Staff booked appointment.";
} else {
    echo "Error: " . $stmt->error;
}
?>
