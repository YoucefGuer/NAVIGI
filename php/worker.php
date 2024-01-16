<?php

use Random\Engine\Secure;

include 'db.php';

if (session_status() === PHP_SESSION_ACTIVE || 1 == 1) {
if (isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id']; }
else {
    $user_id = 1;
}
$firstName = test_input($_POST['firstName']);
$lastName = test_input($_POST['lastName']);
$address = test_input($_POST['address']);
$wilaya = test_input($_POST['wilaya']);
$city = test_input($_POST['city']);
$phone = test_input($_POST['phone']);
$age = test_input($_POST['age']);
$category = test_input($_POST['category']);


$stmt = $conn->prepare("SELECT cat_id FROM category WHERE category_name = ?");
$stmt->bind_param("s", $categoryName);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Category found, fetch the cat_id
    $row = $result->fetch_assoc();
    $catId = $row['cat_id']; }


$stmt = $conn->prepare("INSERT INTO workers (first_name, last_name, adress, wilaya, city, phone, age, cat_id) VALUES (?,?, ?, ?, ?,?, ?, ?)");
$stmt->bind_param("issssssii", $firstName, $lastName, $address, $wilaya,$city, $phone, $age, $catId);
$stmt->execute();
}
else {
    // it is not a user he needs to login
    header("Location: ../login.html");
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>