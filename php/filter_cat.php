<?php
include('db.php');
session_start();

$cat_name = test_input($_POST['cat_name']);

function filter_cat($cat_name) {
    global $conn;
    $stmt = $conn->prepare("SELECT workers.first_name, workers.last_name, category.cat_name 
    FROM workers
    JOIN category ON workers.cat_id = category.cat_id
    WHERE category.cat_name = ?");
    $stmt->bind_param("s", $cat_name);
    $stmt->execute();
    $result = $stmt->get_result();
    $workers = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($workers, $row);
        }
    }
    return $workers;
}

$workers_cat = filter_cat($cat_name);
$_SESSION['workers_cat'] = $workers_cat;
exit();
?>