<?php
include 'db.php';
session_start();

function checkWorkerID($conn, $user_id) {
    $stmt = $conn->prepare("SELECT worker_id FROM workers WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    return $row['worker_id'];
}
$worker_id = checkWorkerID($conn,$_SESSION['user_id']);

if ($_SERVER["REQUEST_METHOD"] === "POST" && $worker_id != $_POST['worker_id']) {
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
    $_SESSION['success'] = "Offer sent successfully, wait for the worker to accept it.";
    header("Location: ../Workers.php");
    exit();
}
else {
    $_SESSION['error'] = "You can't make an offer to yourself, please select another worker.";
    header("Location: ../Workers.php");
    exit();
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>