<?php
include 'db.php';

$sql = "SELECT * FROM plants";
$result = $conn->query($sql);

$plants = [];
while ($row = $result->fetch_assoc()) {
    $plants[] = $row;
}

echo json_encode($plants);
$conn->close();
?>
