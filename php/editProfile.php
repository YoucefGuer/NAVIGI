<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $user_id = $_SESSION['user_id'];
    $first_name = test_input($_POST['first_name']);
    $last_name = test_input($_POST['last_name']);
    $email = test_input($_POST['email']);
    $phone = test_input($_POST['phone']);
    $address = test_input($_POST['address']);
    $city = test_input($_POST['city']);
    $wilaya = test_input($_POST['wilaya']);
    $age = test_input($_POST['age']);
    $password = test_input($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);


    $stmt = $conn->prepare("UPDATE workers SET first_name = ?, last_name = ?, phone = ?, adress = ?, city = ?, age=?, wilaya=? WHERE user_id = ?");
    $stmt->bind_param("sssssisi", $first_name, $last_name, $phone, $address, $city,$age,$wilaya, $user_id);
    $stmt->execute();
    $stmt->close();

    $stmt = $conn->prepare("UPDATE users SET email = ?, pwd = ? WHERE user_id = ?");
    $stmt->bind_param("ssi", $email, $password, $user_id);
    $stmt->execute();
    $stmt->close();

    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $address;
    $_SESSION['city'] = $city;
    $_SESSION['wilaya'] = $wilaya;
    $_SESSION['age'] = $age;
    $_SESSION['email'] = $email;

    $_SESSION['successEdit'] = "Profile updated successfully.";
    header("Location: ../Wprofile.php");
    exit();
}
else {
    $_SESSION['errorEdit'] = "Something went wrong, please try again.";
    header("Location: ../Wprofile.php");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}