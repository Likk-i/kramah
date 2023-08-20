<?php 


if(isset($_GET['submit'])){
    $id = $_GET['id'];
    
    $one = $_GET['one'];
    $two = $_GET['two'];
    $three = $_GET['three'];
    $four = $_GET['four'];
    $five = $_GET['five'];

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
    $query = "INSERT INTO feedback(id, one, two, three, four, five) VALUES ('$id', '$one', '$two', '$three', '$four', '$five')";

    $r1= mysqli_query($conn, $query);
    
    if ($r1) {
                header('Location: p.php');
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
                    <label for="one">A. Feedback collected, analysed, action taken & communicated to relevant body and feedback hosted on the institutional website</label>
                    <input type="text" name="one" required>
                </div>
                <div class="form-group">
                    <label for="two">B. Feedback collected, analysed, action has been taken and communicated to the relevant body</label>
                    <input type="text" name="two" required>
                </div>
                <div class="form-group">
                    <label for="three">  Feedback collected and analysed</label>
                    <input type="text"  name="three">
                </div>
                <div class="form-group">
                    <label for="four">Feedback collected</label>
                    <input type="text"  name="four">
                </div>
                <div class="form-group">
                    <label for="five">Feedback not collected</label>
                    <input type="text"  name="five">
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
