<?php
session_start();

require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['projectId'], $_POST['status'], $_POST['rating'])) {
    $projectId = $_POST['projectId'];
    $status = $_POST['status'];
    $rating = $_POST['rating'];

    // Add your logic to update the project status in the database
    $query = "UPDATE project SET p_status = ?, p_rating = ? WHERE project_id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sii", $status, $rating, $projectId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo json_encode(['status' => 'success', 'message' => 'Project status updated successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error updating project status']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>
