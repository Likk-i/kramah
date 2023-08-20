<?php 
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
            <form method="POST" action="b4.php">
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
                    <label for="name">name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address" required>
                </div>
                <div class="form-group">
                    <label for="year_of_establishment">year_of_establishment</label>
                    <input type="text" name="year_of_establishment" required>
                </div>
                <div class="form-group">
                    <label for="type_of_institute">type_of_institute</label>
                    <input type="text" name="type_of_institute" required>
                </div>
                <div class="form-group">
                    <label for="ownership_status">ownership_status</label>
                    <input type="text" name="ownership_status" required>
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
