<?php 


if(isset($_GET['submit'])){
    $id = $_GET['id'];
    
    $name = $_GET['name'];
    $course_code = $_GET['course_code'];
    $link = $_GET['link'];

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
    $query = "INSERT INTO project VALUES ('$id', '$name', '$course_code', '$link')";

    $r1= mysqli_query($conn, $query);
    
    if ($r1) {
                header('Location: m.php');
                exit();
            }
            else {
    // Insertion failed
    echo "Insertion failed: " . mysqli_error($conn);
}
      mysqli_close($conn);

}
}
if(isset($_POST['s'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <?php require 'includes/header.html'; ?>
    
</head>
<body>
    <!-- Including navbar components-->
    <?php require 'includes/nav.php'; ?>
    
    <?php require 'includes/style_r.php'; ?>
    
    <div class="container">
        <div class="form-box">
            <form method="GET">

                <?php if(isset($error_message)): ?>
                   <script>
                       alert("<?php echo $error_message; ?>");
                   </script>
                <?php endif; ?>

                <div class="form-group">
                    <label for="id">id</label>
                    <input type="text" name="id" required>
                </div>
                <div class="form-group">
                    <label for="name">Name of Programme</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label for="course_code">components of field projects/research  projects/internships  along with course code</label>
                    <input type="text" name="course_code" required>
                </div>
                <div class="form-group">
                    <label for="link"> Links of relavant document</label>
                    <input type="text"  name="link">
                </div>
                
                
                <button class="button" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
  
    <!-- JavaScript Libraries -->
    <?php require 'includes/footer.php'; ?>
<?php
}
?>
