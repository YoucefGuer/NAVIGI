<?php
include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user_id = $_SESSION['user_id'];
    $worker_id = isset($_POST['worker_id']) ? $_POST['worker_id'] : null;
    $description = test_input($_POST['offer-desc']);
    $budget = test_input($_POST['budget']);

// Use a prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO offers (user_id, worker_id, descr, budget) VALUES (?,?,?, ?)");
$stmt->bind_param("iisi", $user_id, $worker_id, $description, $budget);
$stmt->execute();
$stmt->close();
$conn->close();
}
header("Location: ../categories.php");
exit();


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>