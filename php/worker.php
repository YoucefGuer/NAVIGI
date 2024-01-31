<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Random\Engine\Secure;

include 'db.php';
session_start();
// echo "PHP_SESSION_ACTIVE: " . PHP_SESSION_ACTIVE . "<br>";
// echo $_SESSION['user_id'];
if (isset($_SESSION['user_id'])) {
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']);
    $address = test_input($_POST['address']);
    $wilaya = test_input($_POST['wilaya']);
    $city = test_input($_POST['city']);
    $phone = test_input($_POST['phone']);
    $age = test_input($_POST['age']);
    $category = test_input($_POST['category']);
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("SELECT cat_id FROM category WHERE cat_name = ?");
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Category found, fetch the cat_id
        $row = $result->fetch_assoc();
        $catId = $row['cat_id']; 


        $stmt = $conn->prepare("INSERT INTO workers (user_id,first_name, last_name, adress, wilaya, city, phone, age, cat_id) VALUES (?,?, ?,?, ?, ?,?, ?, ?)");
        $stmt->bind_param("issssssis", $user_id,$firstName, $lastName, $address, $wilaya,$city, $phone, $age, $catId);
        $stmt->execute();
        header("Location: ../workers.php");
        exit();
    }
    else {
        // Category not found
        echo "Category not found";
        header("Location: ../index.php");
        exit();
    }
}

else {
    // it is not a user he needs to login
    header("Location: ../login.php");
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>