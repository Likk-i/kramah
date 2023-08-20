<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $hidden_id = $_POST['hidden_id'];

    $db_host = "localhost";
    $db_name = "database";
    $db_pass = "root";
    $db_user = "root";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo "Connection failed: " . mysqli_connect_error();
        exit();
    }

    $id = $_POST['id'];
    
    $title = $_POST['title'];
    $program = $_POST['program'];
    $options = $_POST['options'];

    $q = "UPDATE program SET id = '$id',  title = '$title', program = '$program', options = '$options' WHERE id = '$hidden_id'";

    $r = mysqli_query($conn, $q);

    if ($r) {
        header('Location: met.php');
        exit();
    } else {
        $error_message = mysqli_error($conn);
        echo "Query execution failed: " . $error_message;
    }
}

// Debugging information after the conditional check

