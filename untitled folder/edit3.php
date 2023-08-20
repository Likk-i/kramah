<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['edit'])) {
    $db_host = "localhost";
    $db_name = "nba";
    $db_pass = "";
    $db_user = "root";

    $id = $_POST['id'];
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_error()) {
        echo "Connection failed: " . mysqli_connect_error();
        exit();
    } else {
        $query = "SELECT * FROM institute_info WHERE id='$id'";
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
            
            
        echo "<form method='POST' action='submit3.php' onsubmit='return validateForm()'>";
echo "<input type='hidden' name='hidden_id' value='" . $row['id'] . "'>"; 

// Add the hidden input field

echo "<label for='id' style='color: black;'>ID:</label>";
echo "<textarea name='id' placeholder='" . $row['id'] . "' >" . (isset($_POST['submit']) ? $_POST['id'] : "") . "</textarea><br>";

echo "<label for='name' style='color: black;'>name:</label>";
echo "<textarea name='name' placeholder='" . $row['name'] . "' >" . (isset($_POST['submit']) ? $_POST['name'] : "") . "</textarea><br>";

echo "<label for='address' style='color: black;'>address:</label>";
echo "<textarea name='address' placeholder='" . $row['address'] . "' >" . (isset($_POST['submit']) ? $_POST['address'] : "") . "</textarea><br>";
echo "<label for='year_of_establishment' style='color: black;'>year_of_establishment:</label>";
echo "<textarea name='year_of_establishment' placeholder='" . $row['year_of_establishment'] . "' >" . (isset($_POST['submit']) ? $_POST['year_of_establishment'] : "") . "</textarea><br>";
echo "<label for='type_of_institute' style='color: black;'>type_of_institute:</label>";
echo "<textarea name='type_of_institute' placeholder='" . $row['type_of_institute'] . "' >" . (isset($_POST['submit']) ? $_POST['type_of_institute'] : "") . "</textarea><br>";
echo "<label for='ownership_status' style='color: black;'>ownership_status:</label>";
echo "<textarea name='ownership_status' placeholder='" . $row['ownership_status'] . "' >" . (isset($_POST['submit']) ? $_POST['ownership_status'] : "") . "</textarea><br>";


echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";

        
        
            //echo "</div>";

            // CSS style for .user-image class
            // echo "<style>.user-image {
            //     max-width: 100px;
            //     max-height: 100px;
            // }</style>";

//            echo "<script>
//     const fileInput = document.querySelector('input[name=file]');
//     fileInput.addEventListener('change', function() {
//         const file = fileInput.files[0];
//         const allowedExtensions = /(\.jpg|\.jpeg)$/i;
//         if (!allowedExtensions.exec(file.name)) {
//             alert('Only JPG or JPEG files are allowed.');
//             fileInput.value = '';
//             return false;
//         }
//     });

//     function validateForm() {
//         var name = document.getElementsByName('name')[0].value;
//         var email = document.getElementsByName('email')[0].value;
//         var username = document.getElementsByName('username')[0].value;
//         var password = document.getElementsByName('password')[0].value;
//         var phoneNo = document.getElementsByName('phone_no')[0].value;

//         // Validate phone number format
//         var phoneRegex = /^\d+$/;
//         if (!phoneRegex.test(phoneNo)) {
//             alert('Please enter a valid phone number (digits only).');
//             return false;
//         }

//         // Validate email format
//         var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//         if (!emailRegex.test(email)) {
//             alert('Please enter a valid email address.');
//             return false;
//         }

//         var nameRegex = /^[A-Za-z]+$/;
//         if (!nameRegex.test(name)) {
//             alert('Please enter a valid name (only alphabets are allowed).');
//             return false;
//         }

//         if (name === '' || email === '' || username === '' || password === '' || phoneNo === '') {
//             alert('Please fill in all fields.');
//             return false;
//         }

//         return true;
//     }

    
//     }
// </script>";

        }
    }
}
?>
