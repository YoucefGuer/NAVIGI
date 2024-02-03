<?php

header("Access-Control-Allow-Origin: *");
// Other CORS headers if needed
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");


session_start();
include 'db.php';

$email = test_input($_POST['email']);
$password = test_input($_POST['password']);

// Ensure this is a POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // User not found 
        http_response_code(400); // Set a 400 Bad Request status code 
    } else {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['pwd'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['profile_pic'] = $row['imagePath'];
            // check if this user is a worker
            $stmt = $conn->prepare("SELECT * FROM workers WHERE user_id = ?");
            $stmt->bind_param("i", $_SESSION['user_id']);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            if ($result->num_rows > 0) {
                // this user is a worker
                $_SESSION['is_worker'] = true;
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
                $_SESSION['phone'] = "0" . $row['phone'];
                $_SESSION['address'] = $row['adress'];
                $_SESSION['city'] = $row['city'];
                $_SESSION['email'] = $email;
                $_SESSION['worker_id'] = $row['worker_id'];
                $_SESSION['wilaya'] = $row['wilaya'];
                $_SESSION['age'] = $row['age'];
            }
            else {
                $_SESSION['first_name'] = $_SESSION['username'];
                $_SESSION['last_name'] = "";
                $_SESSION['phone'] = "NOT SET YET";
                $_SESSION['address'] = "NOT SET YET";
                $_SESSION['city'] = "";
                $_SESSION['email'] = $email;
                $_SESSION['wilaya'] = "";
                $_SESSION['age'] = "";
            }
            // create array of workers and fill it from database


            http_response_code(200);
        } else {
            // Incorrect password
            http_response_code(403); // Set a 400 Bad Request status code
    }
}

}
 else {
    // Invalid request method
    http_response_code(405); // Set a 405 Method Not Allowed status code
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
