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
            <form method="POST" action="b5.php">
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
                    <label for="vision">vision</label>
                    <input type="text" name="vision" required>
                </div>
                <div class="form-group">
                    <label for="mission">mission</label>
                    <input type="text" name="mission" required>
                </div>
                <div class="form-group">
                    <label for="core_values">core_values</label>
                    <input type="text" name="core_values" required>
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
