<?php
include 'db.php';

$doctor_id = $_POST['doctor_id'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];
$reason = $_POST['reason'];
$patient_id = 1;

$datetime = $appointment_date . ' ' . $appointment_time;

$stmt = $conn->prepare("INSERT INTO Appointments (PatientID, DoctorID, AppointmentTime, Reason) VALUES (?, ?, ?, ?)");
$stmt->bind_param("iiss", $patient_id, $doctor_id, $datetime, $reason);

if ($stmt->execute()) {
    echo "Appointment booked.";
} else {
    echo "Error: " . $stmt->error;
}
?>
