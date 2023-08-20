<?php 


if(isset($_GET['submit'])){
    $id = $_GET['id'];
    $course_code = $_GET['course_code'];
    $title = $_GET['title'];
    $lecture_h = $_GET['lecture_h'];
    $tutorial_h = $_GET['tutorial_h'];
    $practical_h = $_GET['practical_h'];
    $credits = $_GET['credits'];
    $program = $_GET['program'];
    $options = $_GET['options'];
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
    $query = "INSERT INTO program VALUES ('$id', '$course_code', '$title', '$lecture_h', '$tutorial_h', '$practical_h', '$credits', '$program', '$options')";

    $r1= mysqli_query($conn, $query);
    
    if ($r1) {
                header('Location: course.php');
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
                    <label for="course_code">Course code</label>
                    <input type="text" name="course_code" required>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label for="lecture_h"> Lecture hour</label>
                    <input type="text"  name="lecture_h">
                </div>
                <div class="form-group">
                    <label for="tutorial_h"> Tutorial hour</label>
                    <input type="text"  name="tutorial_h">
                </div>
                <div class="form-group">
                    <label for="practical_h"> practical hour</label>
                    <input type="text"  name="practical_h">
                </div>
                <div class="form-group">
                    <label for="credits">Credits</label>
                    <input type="text" name="credits" required>
                </div>
                <div class="form-group">
                    <label for="program">Program</label>
                    <input type="text" name="program" required>
                </div>
                <div class="form-group">
                    <label for="options">Whether newly introduced during assessment year(yes/no)</label>
                    <input type="text" name="options" required>
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
