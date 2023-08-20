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
    $name = $_GET['name'];
    $hour = $_GET['hour'];
    $total = $_GET['total'];
    

    $q = "UPDATE certificate SET id = '$id', name = '$name', hour = '$hour', total = '$total' WHERE id = '$hidden_id'";

    $r = mysqli_query($conn, $q);

    if ($r) {
        header('Location: n.php');
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
        $query = "SELECT * FROM certificate WHERE id='$id'";
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



echo "<label for='name' style='color: black;'>Name of the add on/certificate/value added program/Diploma Programs/ onlinecourse of MOOCS/SWAYAM/e Patashala/ NPTEL etc:</label>";
echo "<textarea name='name' placeholder='" . $row['name'] . "' >" . (isset($_POST['submit']) ? $_POST['name'] : "") . "</textarea><br>";
echo "<label for='hour' style='color: black;'>Program duration(No of contact Hours):</label>";
echo "<textarea name='hour' placeholder='" . $row['hour'] . "' >" . (isset($_POST['submit']) ? $_POST['hour'] : "") . "</textarea><br>";
echo "<label for='total' style='color: black;'>Number of students benfitted through the program:</label>";
echo "<textarea name='total' placeholder='" . $row['total'] . "' >" . (isset($_POST['submit']) ? $_POST['total'] : "") . "</textarea><br>";


echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";
     }
    }
}
?>
