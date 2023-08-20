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

<body>
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
$db_name = "faculty";
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
    $q = "DELETE FROM faculty WHERE id='$deleteid'";
    $r = mysqli_query($conn, $q);
    // $q1 = "DELETE FROM nba.total_details WHERE total_details.id='$deleteid'";
    // $r1 = mysqli_query($conn2, $q1);
    if ($r) {
        echo '<script>alert("Records have been deleted.");</script>';
    } else {
        echo '<script>alert("Error deleting records.");</script>';
    }
    $query = "SELECT * FROM faculty";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 0) {
include 'includes/header.html';
include 'includes/nav.php';
echo '<div style="background-color: #F7350C; color: white; padding: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; display: flex; justify-content: center; align-items: center; ">No records found</div>';
mysqli_close($conn);

exit();
}
}
$db_host = "localhost";
$db_name = "student";
$db_pass = "root";
$db_user = "root";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_error()) {
    // Display the exact error message
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Return null on connection failure
}
    $l = "SELECT * FROM faculty";
    $r = mysqli_query($conn, $l);
    
    // Split the records into two arrays
    $rows1 = [];
    $rows2 = [];
    $count = 0;
    
    while ($row = mysqli_fetch_assoc($r)) {
        if ($count < 10) {
            $rows1[] = $row;
        } else {
            $rows2[] = $row;
        }
        $count++;
    }
    ?>

   <div class="t">
    <table id="myTable">
        <!-- Table 1 -->
        <tr>
            <th>id</th>
            <th>name</th>
            <th>degree</th>
            <th>university</th>
            <th>year_of_attaining_higher_qualification</th>
            <th>association_with_institute</th>
            <th>designation</th>
            <th>date_of_designation</th>
            <th>date_of_joining_institute</th>
            <th>department</th>
            <th>specialization</th>
            <!-- Add other table headers as needed -->
        </tr>

        <?php foreach ($rows1 as $row) : ?>
            <tr>
                <td><strong><?php echo $row['id']; ?></strong></td>
                <td><strong><?php echo $row['name']; ?></strong></td>
                <td><strong><?php echo $row['degree']; ?></strong></td>
                <td><strong><?php echo $row['university']; ?></strong></td>
                <td><strong><?php echo $row['year_of_attaining_higher_qualification']; ?></strong></td>
                <td><strong><?php echo $row['association_with_institute']; ?></strong></td>
                <td><strong><?php echo $row['designation']; ?></strong></td>
                <td><strong><?php echo $row['date_of_designation']; ?></strong></td>
                <td><strong><?php echo $row['date_of_joining_institute']; ?></strong></td>
                <td><strong><?php echo $row['department']; ?></strong></td>
                <td><strong><?php echo $row['specialization']; ?></strong></td>
                <!-- Add other table cells as needed -->
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<div class="t">
    <table id="myTable">
        <!-- Table 2 -->
        <tr>
            <th>research_paper</th>
            <th>phd_guidance</th>
            <th>faculty_receiving_phd</th>
            <th>currently_associated</th>
            <th>nature_of_association</th>
            <th>total_experience</th>
            <th>Edit</th> <!-- Edit column header -->
            <th>Delete</th> <!-- Delete column header -->
            <!-- Add other table headers as needed -->
        </tr>

        <?php foreach ($rows2 as $row) : ?>
            <tr>
                <td><strong><?php echo $row['research_paper']; ?></strong></td>
                <td><strong><?php echo $row['phd_guidance']; ?></strong></td>
                <td><strong><?php echo $row['faculty_receiving_phd']; ?></strong></td>
                <td><strong><?php echo $row['currently_associated']; ?></strong></td>
                <td><strong><?php echo $row['nature_of_association']; ?></strong></td>
                <td><strong><?php echo $row['total_expereince']; ?></strong></td>
                <td><form method="POST" style="display: inline;" action="e.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <button type="submit" name="edit">Edit</button>
    </form></td>
    <td>
                <form method="GET" style="display: inline;">
                    <button type="submit" name="delete" value="<?php echo $row['id']; ?>">Delete</button>
                </form>
            </td>
                <!-- Add other table cells as needed -->
            </tr>
        <?php endforeach; ?>
    </table>
</div>


    <form method="post" action="c.php">
        <button type="submit" name="s" class="create-btn">Create record</button>
    </form>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <a href="logout.php" class="logout">Logout</a>
</body>

</html>
