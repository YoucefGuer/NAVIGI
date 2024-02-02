<?php
session_start();

require 'db.php';

class OfferHandler
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getOffers()
    {
        // Fetch the worker_id using a prepared statement
        $workerIdQuery = "SELECT worker_id FROM workers WHERE user_id = ?";
        $workerIdStmt = mysqli_prepare($this->conn, $workerIdQuery);
        mysqli_stmt_bind_param($workerIdStmt, "i", $_SESSION['user_id']);
        mysqli_stmt_execute($workerIdStmt);
        mysqli_stmt_bind_result($workerIdStmt, $worker_id);
        mysqli_stmt_fetch($workerIdStmt);
        mysqli_stmt_close($workerIdStmt);

        // Use the obtained worker_id in the main query
        $query = "SELECT * FROM offers WHERE worker_id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $worker_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $offers = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $offers[] = $row;
        }

        mysqli_stmt_close($stmt);

        return $offers;
    }
 
    public function deleteOffer($offer_id)
    {
        $query = "DELETE FROM offers WHERE offer_id = ?";
        $stmt = mysqli_prepare($this->conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $offer_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}
// Assuming you have already established a database connection
$offerHandler = new OfferHandler($conn);

// Check if the request is a POST request and if the 'offerId' parameter is set
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['offerId'])) {
    // Retrieve the 'offerId' from the POST data
    $offerId = $_POST['offerId'];

    // Call the deleteOffer function with the retrieved offerId
    $offerHandler->deleteOffer($offerId);

    // Respond with a success message or any other relevant data
    echo json_encode(['status' => 'success', 'message' => 'Offer deleted successfully']);
} else {
    // Respond with an error message if 'offerId' is not provided
    echo json_encode(['status' => 'error', 'message' => 'OfferId not provided']);
}
?>