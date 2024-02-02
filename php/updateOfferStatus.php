<?php
// updateOfferStatus.php
include 'db.php';
// Perform necessary validations and include database connection code

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $offerId = $_POST['offerId'];
    $status = $_POST['status'];

    // Perform database update based on $offerId and $status

   

    $query = "UPDATE offers SET off_status = ? WHERE offer_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $status, $offerId);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Assuming your update logic goes here

    echo "Offer status updated successfully!";
} else {
    // Handle cases where the request method is not POST
    echo "Invalid request method";
}
?>
