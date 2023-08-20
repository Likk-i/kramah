<?php
 
  if (isset($_POST['submit'])) {
   $hidden_id = $_POST['hidden_id'];
     
 
     
   $db_host = "localhost";
   $db_name = "student";
   $db_pass = "";
   $db_user = "root";
   $db_host1 = "localhost";
   $db_name1 = "nba";
   $db_pass1 = "";
   $db_user1 = "root";
 
   $id = $_POST['id'];
   $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
   $conn1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $db_name1);
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
             $vision = $_POST['vision'];
             $mission = $_POST['mission'];
             $core_values= $_POST['core_values'];
            
            
             
             // File upload is successful, move the uploaded file to the desired location
           
                 $q = "UPDATE nba.objective SET id = '$id', vision = '$vision', mission = '$mission'  WHERE id = '$hidden_id'";
                 $r = mysqli_query($conn1, $q);
                 $q1 = "UPDATE student.objective SET id = '$id', vision = '$vision', mission = '$mission', core_values='$core_values'  WHERE id = '$hidden_id'";
                 $r1 = mysqli_query($conn, $q1);
                 if ($r1) {
                     header('Location: objective.php');
                     exit();
                 } 
             }          
           
        