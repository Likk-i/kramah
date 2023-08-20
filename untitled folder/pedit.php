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
    $one = $_GET['one'];
    $two = $_GET['two'];
    $three = $_GET['three'];
    $four = $_GET['four'];
    $five = $_GET['five'];
    

    $q = "UPDATE feedback SET id = '$id', one = '$one', two = '$two', three = '$three', four = '$four', five = '$five' WHERE id = '$hidden_id'";

    $r = mysqli_query($conn, $q);

    if ($r) {
        header('Location: p.php');
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



echo "<label for='one' style='color: black;'>A. Feedback collected, analysed, action taken & communicated to relevant body and feedback hosted on the institutional website:</label>";
echo "<textarea name='one' placeholder='" . $row['one'] . "' >" . (isset($_POST['submit']) ? $_POST['one'] : "") . "</textarea><br>";
echo "<label for='two' style='color: black;'>B. Feedback collected, analysed, action has been taken and communicated to the relevant body:</label>";
echo "<textarea name='two' placeholder='" . $row['two'] . "' >" . (isset($_POST['submit']) ? $_POST['two'] : "") . "</textarea><br>";
echo "<label for='three' style='color: black;'> Feedback collected and analysed:</label>";
echo "<textarea name='three' placeholder='" . $row['three'] . "' >" . (isset($_POST['submit']) ? $_POST['three'] : "") . "</textarea><br>";
echo "<label for='four' style='color: black;'>Feedback collected:</label>";
echo "<textarea name='four' placeholder='" . $row['four'] . "' >" . (isset($_POST['submit']) ? $_POST['four'] : "") . "</textarea><br>";
echo "<label for='five' style='color: black;'>Feedback not collected:</label>";
echo "<textarea name='five' placeholder='" . $row['five'] . "' >" . (isset($_POST['submit']) ? $_POST['five'] : "") . "</textarea><br>";


echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";
     }
    }
}
?>
