<?php

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	
	$title = $_POST['title'];
	$options = $_POST['options'];
    $program = $_POST['program'];

	$db_host="localhost";
        $db_name="database";
        $db_pass="root";
        $db_user="root";
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
       
if (mysqli_connect_error()) {
    // Display the exact error message
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Return null on connection failure
}
else{
	$query = "INSERT INTO program (id,  title, program, options) 
          VALUES ('$id', '$title', '$program', '$options')";

    $r1= mysqli_query($conn, $query);
    
	if ($r1) {
                header('Location: met.php');
                exit();
            }
            else {
    // Insertion failed
    echo "Insertion failed: " . mysqli_error($conn);
}
      mysqli_close($conn);

}
}