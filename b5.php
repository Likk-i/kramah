<?php
if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$vision= $_POST['vision'];
	$mission= $_POST['mission'];
    $core_values= $_POST['core_values'];
	
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
	$query = "INSERT INTO nba.objective values('$id', '$vision', '$mission')";
    $r1 = mysqli_query($conn1, $query);
    $query1= "INSERT INTO student.objective values('$id', '$vision', '$mission', '$core_values')";
    $r = mysqli_query($conn, $query1);
	if ($r) {
                header('Location: objective.php');
                exit();
            }
      mysqli_close($conn);

}
}