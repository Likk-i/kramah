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
  $db_host2 = "localhost";
  $db_name2 = "nirf";
  $db_pass2 = "";
  $db_user2= "root";


  $id = $_POST['id'];
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  $conn1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $db_name1);
  $conn1 = mysqli_connect($db_host1, $db_user1, $db_pass1, $db_name1);
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
            $gender = $_POST['gender'];
            $program = $_POST['program'];
            $total = $_POST['total'];
            $year = $_POST['year'];
           
            
            // File upload is successful, move the uploaded file to the desired location
          
                $q = "UPDATE student.total_details SET id = '$id', gender = '$gender', program = '$program', total='$total',  year = '$year'  WHERE id = '$hidden_id'";
                $r = mysqli_query($conn, $q);
                $q1 = "UPDATE nba.total_details SET id = '$id', gender = '$gender', program = '$program', total='$total',  year = '$year'  WHERE id = '$hidden_id'";
                $r1 = mysqli_query($conn1, $q1);
                $q2 = "UPDATE nirf.total_details SET id = '$id', gender = '$gender', program = '$program', total='$total',  year = '$year'  WHERE id = '$hidden_id'";
                $r2 = mysqli_query($conn2, $q2);
                if ($r) {
                    header('Location: student.php');
                    exit();
                } 
            }          
          
       