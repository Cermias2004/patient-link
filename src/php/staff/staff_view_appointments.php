<?php
include 'db.php';

$doctor_id = $_GET['doctor_id'];
$date = $_GET['filter_date'];

$stmt = $conn->prepare("SELECT * FROM Appointments WHERE DoctorID = ? AND DATE(AppointmentTime) = ?");
$stmt->bind_param("is", $doctor_id, $date);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<p>Appointment ID: {$row['AppointmentID']} - Time: {$row['AppointmentTime']}</p>";
}
?>
