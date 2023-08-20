<?php
// Set session timeout to 30 minutes
$sessionTimeout = 1800; // 30 minutes

// Set session garbage collection lifetime
ini_set('session.gc_maxlifetime', $sessionTimeout);

// Set the session cookie lifetime to match the session timeout
session_set_cookie_params($sessionTimeout);

session_start();

// Initialize last activity time if not already set
if (!isset($_SESSION['last_activity'])) {
    $_SESSION['last_activity'] = time();
}

// Rest of your code...

// Assign session variables only if they are not already set
if (!isset($_SESSION['username']) && !isset($_SESSION['email'])) {
    if (isset($_POST['username']) && isset($_POST['email'])) {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['email'] = $_POST['email'];
    } else {
        include 'includes/header.html';
        include 'includes/nav.php';
        echo '<div style="background-color: #F7350C; color: white; padding: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; display: flex; justify-content: center; align-items: center; ">Your session has expired. Please login again</div>';
        exit;
    }
}

if (isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > $sessionTimeout) {
    session_unset();
    session_destroy();
    include 'includes/header.html';
    include 'includes/nav.php';
    echo '<div style="background-color: #F7350C; color: white; padding: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; display: flex; justify-content: center; align-items: center; ">Your session has expired. Please login again</div>';
    exit;
}

// Update the user's last activity time
$_SESSION['last_activity'] = time();

// Connecting to the database
include 'includes/connection.php';

$email = $_SESSION['email'];
$username = $_SESSION['username'];
$q = "SELECT username, email FROM data WHERE email = '$email' AND username = '$username'";
$r = mysqli_query($conn, $q);

if (mysqli_num_rows($r) == 0) {
    include 'includes/header.html';
    include 'includes/nav.php';
    session_unset();
    session_destroy();
    echo '<div style="background-color: #F7350C; color: white; padding: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; display: flex; justify-content: center; align-items: center; ">Invalid Username or Password</div>';
    exit();
}

$query = "SELECT * FROM data";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0 && isset($email) && isset($username)) {
    include 'includes/header.html';
    include 'includes/nav.php';
    echo '<div style="background-color: #F7350C; color: white; padding: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; display: flex; justify-content: center; align-items: center; ">No records found</div>';
    mysqli_close($conn);
    exit();
}

mysqli_close($conn);
?>

<!-- Rest of the HTML code -->
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Page</title>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <?php include 'includes/header.html'; ?>
   <?php include 'includes/nav.php'; ?>
   <style>
   .center {
        display: flex;
        justify-content: center;
        margin-top: 20em;
    }
    
    .button-container {
        display: inline-block;
        margin: 0 1em;
    }
    body {
            background-image: url(img/book.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .button-container button {
           
            font-size: 1.5em;
        padding: 10px 20px;
        width: 250px;
    }
   </style>
</head>

<body>




    <?php
    if (!isset($_SESSION['username']) && !isset($_SESSION['email'])) {
        echo '<div class="login-message">';
        echo 'You are not logged in. Please log in to view the table.';
        echo '</div>';
        exit();
    }
    ?>
    <div class="center">
    <div class="button-container">
        <form method="POST" action="omnibus.php">
            <button type="submit" name="n">Omnibus</button>
           

        </form>
    </div>
    <div class="button-container">
        <form method="POST" action="naac.php">
            <button type="submit" name="n">NAAC</button>
           

        </form>
    </div>
    <div class="button-container">
        <form method="POST" action="nba.php">
            <button type="submit" name="n">NBA</button>
           

        </form>
    </div>
    <div class="button-container">
        <form method="POST" action="nirf.php">
            <button type="submit" name="n">NIRF</button>
           

        </form>
    </div>
</div>



    


    <?php require 'includes/footer.php'; ?>

