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
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid black;
        }
        .t {
            display: flex;
            justify-content: center;
        }
        .logout {
            display: inline-block;
            padding: 8px 16px;
            font-size: 16px;
            text-decoration: none;
            background-color: white; /* Specify the cement color here */
            color: black;
            border: 2px solid black; /* Set the border color to black */
            border-radius: 1px;
            cursor: pointer;
           
            margin-right: 10px;
            margin-left: 1090px;
        }

        .logout:hover {
            background-color: #b8b8b8; /* Specify the hover color here */
        }
    </style>
</head>
<?php

$db_host = "localhost";
$db_name = "database";
$db_pass = "root";
$db_user = "root";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_error()) {
    // Display the exact error message
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Return null on connection failure
}
if (isset($_GET['delete'])) {
    $db_host = "localhost";
$db_name = "database";
$db_pass = "root";
$db_user = "root";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if (mysqli_connect_error()) {
    // Display the exact error message
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Return null on connection failure
}
    $deleteid = $_GET['delete'];
    $_SESSION['deleteid'] = $deleteid;
    $q = "DELETE FROM feedback  WHERE id='$deleteid'";
    $r = mysqli_query($conn, $q);
    
    if ($r) {
        echo '<script>alert("Records have been deleted.");</script>';
    } else {
        echo '<script>alert("Error deleting records.");</script>';
    }
    $query = "SELECT * FROM feedback";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 0) {

echo '<div style="background-color: #F7350C; color: white; padding: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; display: flex; justify-content: center; align-items: center; ">No records found</div>';
mysqli_close($conn);

exit();
}
}
$db_host = "localhost";
$db_name = "database";
$db_pass = "root";
$db_user = "root";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_error()) {
    // Display the exact error message
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Return null on connection failure
}
$l = "select *from feedback";
$r = mysqli_query($conn, $l);
?>
<h5 style="color: #00BFFF;">"Structured feedback for curriculum and its transactions is obtained regularly from stakeholders like Students, Teachers, Employers, Alumni, Academic peers etc., and Feedback processes of the institution may be classified as follows: (20)
</h5>                                                  
<h6 style="color: #00BFFF;">A. Feedback collected, analysed, action taken and feedback
       hosted on the institutional website
<h6>                                             
<h6 style="color: #00BFFF;">
B. Feedback collected, analysed and action has been taken
</h6>
<h6 style="color: #00BFFF;">

C. Feedback collected and analysed

</h6>   
<h6 style="color: #00BFFF;">


D. Feedback collected


</h6>  
<h6 style="color: #00BFFF;">



E. Feedback not collected


</h6>   


<div class="t">
<table id="myTable">
    <tr>
        <th>id</th>
        <th>A. Feedback collected, analysed, action taken & communicated to relevant body and feedback hosted on the institutional website</th>
        <th>B. Feedback collected, analysed, action has been taken and communicated to the relevant body</th>
        <th> Feedback collected and analysed</th>
         <th>Feedback collected</th>
          <th>Feedback not collected</th>
        <th>Edit</th> <!-- Delete column header -->
        <th>Delete</th> <!-- Edit column header -->
    </tr>

    <?php while ($row = mysqli_fetch_assoc($r)) : ?>
        <tr>
            <td><strong><?php echo $row['id']; ?></strong></td>
            <td><strong><?php echo $row['one']; ?></strong></td>
            <td><strong><?php echo $row['two']; ?></strong></td>
            <td><strong><?php echo $row['three']; ?></strong></td>
            <td><strong><?php echo $row['four']; ?></strong></td>
            <td><strong><?php echo $row['five']; ?></strong></td>
            
           
            <td><form method="POST" style="display: inline;" action="pedit.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <button type="submit" name="edit">Edit</button>
    </form></td>
            <td>
                <form method="GET" style="display: inline;">
                    <button type="submit" name="delete" value="<?php echo $row['id']; ?>">Delete</button>
                </form>
            </td>
        </tr>
    <?php endwhile; ?>
</table></div>

<form method="post" action="pcreate.php">
    <button type="submit" name="s" class="create-btn">Create record</button>
</form>

<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
<a href="logout.php" class="logout">Logout</a>
