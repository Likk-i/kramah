<?php
if(isset($_POST['submit'])){
	$id = $_POST['name'];
	$gender = $_POST['email'];
	$program = $_POST['username'];
	$total = $_POST['password'];
	$year = $_POST['phone_no'];
	$db_host="localhost";
        $db_name="student";
        $db_pass="";
        $db_user="root";
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        $db_host1="localhost";
        $db_name1="nba";
        $db_pass1="";
        $db_user1="root";
        $conn1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $db_name1);
if (mysqli_connect_error()) {
    // Display the exact error message
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Return null on connection failure
}
else{
	$query = "INSERT INTO student.total_details values('$id', '$gender', '$program', '$total', '$year')";
    $query1= "INSERT INTO nba.total_details values('$id', '$gender', '$program', '$total', '$year')";
    $r = mysqli_query($conn1, $query1);
	if (mysqli_query($conn, $query)) {
                header('Location: student1.php');
                exit();
            }
      mysqli_close($conn);

}
}