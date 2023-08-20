<?php


if (isset($_GET['submit'])) {
    
    $hidden_id = $_GET['hidden_id'];

    $db_host = "localhost";
    $db_name = "database";
    $db_pass = "root";
    $db_user = "root";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo "Connection failed: " . mysqli_connect_error();
        exit();
    }

    $id = $_GET['id'];
    $course_code = $_GET['course_code'];
    $title = $_GET['title'];
    $lecture_h = $_GET['lecture_h'];
    $tutorial_h = $_GET['tutorial_h'];
    $practical_h = $_GET['practical_h'];
    $credits = $_GET['credits'];
    $program = $_GET['program'];
    $options = $_GET['options'];

    $q = "UPDATE program SET id = '$id', course_code = '$course_code', title = '$title', lecture_h = '$lecture_h', practical_h = '$practical_h', tutorial_h = '$tutorial_h', credits = '$credits', program = '$program', options = '$options' WHERE id = '$hidden_id'";

    $r = mysqli_query($conn, $q);

    if ($r) {
        header('Location: course.php');
        exit();
    } else {
        $error_message = mysqli_error($conn);
        echo "Query execution failed: " . $error_message;
    }
}

// Debugging information after the conditional check



if (isset($_POST['edit'])) {
    $db_host = "localhost";
    $db_name = "database";
    $db_pass = "root";
    $db_user = "root";

    $id = $_POST['id'];
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_error()) {
        echo "Connection failed: " . mysqli_connect_error();
        exit();
    } else {
        $query = "SELECT * FROM program WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result); // Fetch the row
             include 'includes/header.html';
             include 'includes/nav.php';
        //      echo '<style>
        // body {
        //     background-image: url("img/table copy.webp");
        //     background-repeat: no-repeat;
        //     background-size: cover;
        // }
        // </style>';
            
            
        echo "<form method='GET'>";
echo "<input type='hidden' name='hidden_id' value='" . $row['id'] . "'>"; 

// Add the hidden input field

echo "<label for='id' style='color: black;'>ID:</label>";
echo "<textarea name='id' placeholder='" . $row['id'] . "' >" . (isset($_POST['submit']) ? $_POST['id'] : "") . "</textarea><br>";



echo "<label for='course_code' style='color: black;'>Course code:</label>";
echo "<textarea name='course_code' placeholder='" . $row['course_code'] . "' >" . (isset($_POST['submit']) ? $_POST['course_code'] : "") . "</textarea><br>";
echo "<label for='title' style='color: black;'>Title:</label>";
echo "<textarea name='title' placeholder='" . $row['title'] . "' >" . (isset($_POST['submit']) ? $_POST['title'] : "") . "</textarea><br>";
echo "<label for='lecture_h' style='color: black;'>Lecture Hour:</label>";
echo "<textarea name='lecture_h' placeholder='" . $row['lecture_h'] . "' >" . (isset($_POST['submit']) ? $_POST['lecture_h'] : "") . "</textarea><br>";
echo "<label for='tutorial_h' style='color: black;'>Tutorial Hour:</label>";
echo "<textarea name='tutorial_h' placeholder='" . $row['tutorial_h'] . "' >" . (isset($_POST['submit']) ? $_POST['tutorial_h'] : "") . "</textarea><br>";
echo "<label for='practical_h' style='color: black;'>Practical Hour:</label>";
echo "<textarea name='practical_h' placeholder='" . $row['practical_h'] . "' >" . (isset($_POST['submit']) ? $_POST['practical_h'] : "") . "</textarea><br>";
echo "<label for='credits' style='color: black;'>Credits:</label>";
echo "<textarea name='credits' placeholder='" . $row['credits'] . "' >" . (isset($_POST['submit']) ? $_POST['credits'] : "") . "</textarea><br>";
echo "<label for='program' style='color: black;'>Program:</label>";
echo "<textarea name='program' placeholder='" . $row['program'] . "' >" . (isset($_POST['submit']) ? $_POST['program'] : "") . "</textarea><br>";
echo "<label for='options' style='color: black;'>Options:</label>";
echo "<textarea name='options' placeholder='" . $row['options'] . "' >" . (isset($_POST['submit']) ? $_POST['options'] : "") . "</textarea><br>";


echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";
     }
    }
}
?>
