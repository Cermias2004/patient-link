<?php
$conn = new mysqli("localhost", "root", "", "hospital");

$eid = $_POST['eid'];
$password = $_POST['password'];

$query = "SELECT name, salary, ssn FROM employee WHERE eid = '$eid' AND password = '$password'";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: {$row['name']}<br>Salary: {$row['salary']}<br>SSN: {$row['ssn']}<br><br>";
    }
} else {
    echo "Login failed.";
}
?>
