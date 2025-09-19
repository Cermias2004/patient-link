<?php
include 'db.php';

$date = $_GET['filter_date'];
$doctor_id = 1;

$stmt = $conn->prepare("SELECT * FROM Appointments WHERE DoctorID = ? AND DATE(AppointmentTime) = ?");
$stmt->bind_param("is", $doctor_id, $date);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "<p>ID: {$row['AppointmentID']} | Time: {$row['AppointmentTime']}</p>";
}
?>
