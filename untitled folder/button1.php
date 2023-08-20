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
            <form method="POST" action="b2.php">

                <?php if(isset($error_message)): ?>
                   <script>
                       alert("<?php echo $error_message; ?>");
                   </script>
                <?php endif; ?>

                <div class="form-group">
                    <label for="name">id</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">gender</label>
                    <input type="text" name="email" required>
                </div>
                <div class="form-group">
                    <label for="username">program</label>
                    <input type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">total</label>
                    <input type="text" id="password" name="password" required>
                </div>
                <!-- <div class="form-group">
                    <label for="image">Image (JPG or JPEG only)</label>
                    <input type="file" name="file" accept=".jpg, .jpeg" required>
                </div>
                <script>
                    const fileInput = document.getElementById('image');
                    fileInput.addEventListener('change', function() {
                        const file = fileInput.files[0];
                        const allowedExtensions = /(\.jpg|\.jpeg)$/i;
                        if (!allowedExtensions.exec(file.name)) {
                            alert('Only JPG or JPEG files are allowed.');
                            fileInput.value = '';
                            return false;
                        }
                    });
                </script> -->

                <div class="form-group">
                    <label for="phone_no">year</label>
                    <input type="text" name="phone_no" required>
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
