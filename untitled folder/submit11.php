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
    $course_code = $_POST['course_code'];
    $title = $_POST['title'];
    $lecture_h = $_POST['lecture_h'];
    $tutorial_h = $_POST['tutorial_h'];
    $practical_h = $_POST['practical_h'];
    $credits = $_POST['credits'];

    $q = "UPDATE program SET id = '$id', course_code = '$course_code', title = '$title', lecture_h = '$lecture_h', tutorial_h = '$tutorial_h', practical_h = '$practical_h', credits = '$credits' WHERE id = '$hidden_id'";

    $r = mysqli_query($conn, $q);

    if ($r) {
        header('Location: edit10.php');
        exit();
    } else {
        $error_message = mysqli_error($conn);
        echo "Query execution failed: " . $error_message;
    }
}

// Debugging information after the conditional check

