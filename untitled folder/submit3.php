<?php
 
  if (isset($_POST['submit'])) {
   $hidden_id = $_POST['hidden_id'];
     
 
     
   $db_host = "localhost";
   $db_name = "nba";
   $db_pass = "";
   $db_user = "root";
//    $db_host1 = "localhost";
//    $db_name1 = "student";
//    $db_pass1 = "";
//    $db_user1 = "root";
 
   $id = $_POST['id'];
   $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
//    $conn1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $db_name1);
   if (mysqli_connect_error()) {
       echo "Connection failed: " . mysqli_connect_error();
       exit();
   }
    
     // $id = $_POST['id'];
     // $check_query = "SELECT * FROM total_details WHERE  id ='$hidden_id'";
     // $check_result = mysqli_query($conn, $check_query);
     // if (mysqli_num_rows($check_result) > 0) {
     //     include 'includes/header.html';
     //     include 'includes/nav.php';
     //    echo '<div style="background-color: #F7350C; color: white; padding: 10px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px; display: flex; justify-content: center; align-items: center; "> ID already exists. Please select other</div>';
     //     exit();
     //}
             
             $id= $_POST['id'];
             $name = $_POST['name'];
             $address = $_POST['address'];
             $year_of_establishment	 = $_POST['year_of_establishment'];
             $type_of_institute = $_POST['type_of_institute'];
             $ownership_status = $_POST['ownership_status'];

            
            
             
             // File upload is successful, move the uploaded file to the desired location
           
                //  $q = "UPDATE student.total_details SET id = '$id', gender = '$gender', program = '$program', total='$total',  year = '$year'  WHERE id = '$hidden_id'";
                //  $r = mysqli_query($conn, $q);
                 $q1 = "UPDATE nba.institute_info SET id = '$id', name = '$name', address = '$address', year_of_establishment = '$year_of_establishment',type_of_institute = '$type_of_institute', ownership_status = '$ownership_status' WHERE id = '$hidden_id'";
                 $r1 = mysqli_query($conn, $q1);
                 if ($r1) {
                     header('Location: institute1.php');
                     exit();
                 } 
             }          
           
        