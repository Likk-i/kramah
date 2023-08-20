<?php
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$name= $_POST['name'];
	$address= $_POST['address'];
	$year_of_establishment= $_POST['year_of_establishment'];
    $type_of_institute= $_POST['type_of_institute'];
    $ownership_status	= $_POST['ownership_status'];
	$db_host="localhost";
        $db_name="nba";
        $db_pass="";
        $db_user="root";
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        // $db_host1="localhost";
        // $db_name1="nba";
        // $db_pass1="";
        // $db_user1="root";
        // $conn1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $db_name1);
if (mysqli_connect_error()) {
    // Display the exact error message
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Return null on connection failure
}
else{
	// $query = "INSERT INTO student.total_details values('$id', '$gender', '$program', '$total', '$year')";
    $query1= "INSERT INTO nba.institute_info values('$id', '$name', '$address', '$year_of_establishment', '$type_of_institute', ' $ownership_status')";
    $r = mysqli_query($conn, $query1);
	if ($r) {
                header('Location: institute1.php');
                exit();
            }
      mysqli_close($conn);

}
}