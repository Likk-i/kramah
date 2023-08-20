<?php 


if(isset($_GET['submit'])){
    $id = $_GET['id'];
    
    $four = $_GET['four'];
    $six = $_GET['six'];
    $seven = $_GET['seven'];
    $eight = $_GET['eight'];
    $nine = $_GET['nine'];


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
    $query = "INSERT INTO feedback(id, four, six, seven, eight, nine) VALUES ('$id', '$four', '$six', '$seven', '$eight', '$nine')";



    $r1= mysqli_query($conn, $query);
    
    if ($r1) {
                header('Location: r.php');
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
                    <label for="four">collected_for_all_course(yes\no)</label>
                    <input type="text" name="four" required>
                </div>
                <div class="form-group">
                    <label for="six">collection_process</label>
                    <input type="text" name="six" required>
                </div>
                <div class="form-group">
                    <label for="seven"> avg_students_participation</label>
                    <input type="text"  name="seven">
                </div>
                 <div class="form-group">
                    <label for="eight"> analysis_process</label>
                    <input type="text"  name="eight">
                </div>
                 <div class="form-group">
                    <label for="nine"> corrective_measuresl</label>
                    <input type="text"  name="nine">
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
