<?php
$conn = new mysqli("localhost", "root", "", "hospital");

$eid = $_POST['eid'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT name, salary, ssn FROM employee WHERE eid = ? AND password = ?");
$stmt->bind_param("ss", $eid, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: {$row['name']}<br>Salary: {$row['salary']}<br>SSN: {$row['ssn']}<br><br>";
    }
} else {
    echo "Login failed.";
}
?>
