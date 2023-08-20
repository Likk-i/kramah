<?php

if(isset($_POST['submit'])){
	$id = $_POST['id'];
	$course_code = $_POST['course_code'];
	$title = $_POST['title'];
	$lecture_h=$_POST['lecture_h'];
    $tutorial_h=$_POST['tutorial_h'];
    $practical_h=$_POST['practical_h'];
    $credits=$_POST['credits'];
    

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
	$query = "INSERT INTO program (id, course_code, title, lecture_h, tutorial_h, practical_h, credits) 
          VALUES ('$id', '$course_code', '$title', '$lecture_h', '$tutorial_h', '$practical_h', '$credits')";

    $r1= mysqli_query($conn, $query);
    
	if ($r1) {
                header('Location: edit10.php');
                exit();
            }
            else {
    // Insertion failed
    echo "Insertion failed: " . mysqli_error($conn);
}
      mysqli_close($conn);

}
}