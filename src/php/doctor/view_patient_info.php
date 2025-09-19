<?php
include 'db.php';

$patient_id = $_GET['patient_id'];

$stmt = $conn->prepare("SELECT * FROM Patients WHERE PatientID = ?");
$stmt->bind_param("i", $patient_id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

echo "<pre>";
print_r($data);
echo "</pre>";
?>
