<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
            
            
        echo "<form method='POST' action='submit11.php' onsubmit='return validateForm()'>";
echo "<input type='hidden' name='hidden_id' value='" . $row['id'] . "'>"; 

// Add the hidden input field

echo "<label for='id' style='color: black;'>ID:</label>";
echo "<textarea name='id' placeholder='" . $row['id'] . "' >" . (isset($_POST['submit']) ? $_POST['id'] : "") . "</textarea><br>";

echo "<label for='course_code' style='color: black;'>course_code:</label>";
echo "<textarea name='course_code' placeholder='" . $row['course_code'] . "' >" . (isset($_POST['submit']) ? $_POST['course_code'] : "") . "</textarea><br>";

echo "<label for='title' style='color: black;'>course_title:</label>";
echo "<textarea name='title' placeholder='" . $row['title'] . "' >" . (isset($_POST['submit']) ? $_POST['title'] : "") . "</textarea><br>";
echo "<label for='lecture_h' style='color: black;'>lecture_hour:</label>";
echo "<textarea name='lecture_h' placeholder='" . $row['lecture_h'] . "' >" . (isset($_POST['submit']) ? $_POST['lecture_h'] : "") . "</textarea><br>";
echo "<label for='tutorial_h' style='color: black;'>tutorial_hour:</label>";
echo "<textarea name='tutorial_h' placeholder='" . $row['tutorial_h'] . "' >" . (isset($_POST['submit']) ? $_POST['tutorial_h'] : "") . "</textarea><br>";
echo "<label for='practical_h' style='color: black;'>practical_hour:</label>";
echo "<textarea name='practical_h' placeholder='" . $row['practical_h'] . "' >" . (isset($_POST['submit']) ? $_POST['practical_h'] : "") . "</textarea><br>";
echo "<label for='credits' style='color: black;'>credits:</label>";
echo "<textarea name='credits' placeholder='" . $row['credits'] . "' >" . (isset($_POST['submit']) ? $_POST['credits'] : "") . "</textarea><br>";


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
