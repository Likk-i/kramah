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
            <form method="POST" action="b15.php">

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
                    <label for="program">program</label>
                    <input type="text" name="program" required>
                </div>
                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label for="options">whether newly introduced during assessment year(yes/no)</label>
                    <input type="text"  name="options">
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
