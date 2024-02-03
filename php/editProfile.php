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
    $passworda = password_hash($password, PASSWORD_DEFAULT);

    $username = test_input($_POST['username']);



    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE workers SET first_name = ?, last_name = ?, phone = ?, adress = ?, city = ?, age=?, wilaya=? WHERE user_id = ?");
    $stmt->bind_param("sssssisi", $first_name, $last_name, $phone, $address, $city,$age,$wilaya, $user_id);
    $stmt->execute();
    $stmt->close();

    //check if email exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND user_id != ?");
    $stmt->bind_param("si", $email, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Email already exists.";
        header("Location: ../Wprofile.php");
        exit();
    }

    //check if username exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND user_id != ?");
    $stmt->bind_param("si", $username, $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Username already exists.";
        header("Location: ../Wprofile.php");
        exit();
    }

    //check if password is correct
    $stmt = $conn->prepare("SELECT pwd FROM users WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    if (!password_verify($password, $row['pwd'])) {
        $_SESSION['error'] = "Incorrect password.";
        header("Location: ../Wprofile.php");
        exit();
    }



    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE users SET email = ?, username=? WHERE user_id = ? AND pwd = ?");
    $stmt->bind_param("ssis", $email,$username, $user_id , $passworda);
    $stmt->execute();
    $stmt->close();

    $_SESSION['username'] = $username;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $address;
    $_SESSION['city'] = $city;
    $_SESSION['wilaya'] = $wilaya;
    $_SESSION['age'] = $age;
    $_SESSION['email'] = $email;

    $_SESSION['success'] = "Profile updated successfully.";
    header("Location: ../Wprofile.php");
    exit();
}
else {
    $_SESSION['error'] = "Something went wrong, please try again.";
    header("Location: ../Wprofile.php");
    exit();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}