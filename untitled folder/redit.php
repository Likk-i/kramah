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
    $four = $_GET['four'];
    $six = $_GET['six'];
    $seven = $_GET['seven'];
    $eight = $_GET['eight'];
    $nine = $_GET['nine'];

    $q = "UPDATE feedback SET id = '$id', four = '$four', six = '$six', seven = '$seven', eight = '$eight', nine = '$nine' WHERE id = '$hidden_id'";

    $r = mysqli_query($conn, $q);

    if ($r) {
        header('Location: r.php');
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
        $query = "SELECT * FROM feedback WHERE id='$id'";
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



echo "<label for='four' style='color: black;'>collected_for_all_course(yes\no):</label>";
echo "<textarea name='four' placeholder='" . $row['four'] . "' >" . (isset($_POST['submit']) ? $_POST['four'] : "") . "</textarea><br>";
echo "<label for='six' style='color: black;'>collection_process:</label>";
echo "<textarea name='six' placeholder='" . $row['six'] . "' >" . (isset($_POST['submit']) ? $_POST['six'] : "") . "</textarea><br>";
echo "<label for='seven' style='color: black;'>avg_students_participation:</label>";
echo "<textarea name='seven' placeholder='" . $row['seven'] . "' >" . (isset($_POST['submit']) ? $_POST['seven'] : "") . "</textarea><br>";
echo "<label for='eight' style='color: black;'>analysis_proces:</label>";
echo "<textarea name='eight' placeholder='" . $row['eight'] . "' >" . (isset($_POST['submit']) ? $_POST['eight'] : "") . "</textarea><br>";
echo "<label for='nine' style='color: black;'>corrective_measures:</label>";
echo "<textarea name='nine' placeholder='" . $row['nine'] . "' >" . (isset($_POST['submit']) ? $_POST['nine'] : "") . "</textarea><br>";


echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";
     }
    }
}
?>
