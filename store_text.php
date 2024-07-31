<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "speechtotext", 3307);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $command = $_POST['command'];
    $stmt = $conn->prepare("INSERT INTO commands (command, timestamp) VALUES (?, NOW())");
    $stmt->bind_param("s", $command);
    $stmt->execute();
    $stmt->close();
    echo "Command stored successfully";
}

$conn->close();
?>
