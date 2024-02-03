<?php
session_start();
if(isset($_POST["submit"])) {

    $target_dir = "uploads/";
    $timestamp = pathinfo($_FILES["profilePic"]["name"], PATHINFO_FILENAME);
    $_FILES["profilePic"]["name"] = $_SESSION['user_id']."_".$timestamp.".jpg";

    $target_file = $target_dir . basename($_FILES["profilePic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profilePic"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $_SESSION['error'] = "File is not an image.";
        header('location: Wprofile.php');
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $_SESSION['error'] = "Sorry, file already exists.";
        header('location: Wprofile.php');
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profilePic"]["size"] > 500000) {
        $_SESSION['error'] = "Sorry, your file is too large.";
        header('location: Wprofile.php');
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        header('location: Wprofile.php');
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        header('location: Wprofile.php');
        exit();
    // if everything is ok, try to upload file
    } else {
        
        $destination_path = getcwd().DIRECTORY_SEPARATOR;
        $target_path = $destination_path . basename( $_FILES["profilePic"]["name"]);
        move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file);

        require 'php/db.php';
                // Fetch the current image path
                $fetchQuery = "SELECT imagePath FROM users WHERE user_id = '".$_SESSION['user_id']."'";
                $fetchResult = mysqli_query($conn, $fetchQuery);
                $row = mysqli_fetch_assoc($fetchResult);
                if($row['imagePath'] != ""){
                    $currentImagePath = $row['imagePath'];
                    error_reporting(E_ALL); ini_set('display_errors', '1');
                    // Delete the current image file
                    if (file_exists($currentImagePath)) {
                        unlink($currentImagePath);
                    }
                }

        $query = "UPDATE users SET imagePath = 'uploads/".$_FILES["profilePic"]["name"]."' 
        WHERE user_id = '".$_SESSION['user_id']."'";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            $_SESSION['profile_pic'] = "uploads/".$_FILES["profilePic"]["name"];
            $_SESSION['success'] = "Profile Picture Updated";
            header('location: Wprofile.php');
        }
        else {
            $_SESSION['error'] = "Profile Picture Not Updated";
            header('location: Wprofile.php');
        }

    }
}
?>