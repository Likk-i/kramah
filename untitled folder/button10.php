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
            <form method="POST" action="b10.php">

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
                    <label for="course_code">course_code</label>
                    <input type="text" name="course_code" required>
                </div>
                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" required>
                </div>
                <div class="form-group">
                    <label for="lecture_h">lecture_hours</label>
                    <input type="text"  name="lecture_h" required>
                </div>
                <div class="form-group">
                    <label for="tutorial_h">tutorial_hours</label>
                    <input type="text"  name="tutorial_h" required>
                </div>
                <div class="form-group">
                    <label for="practical_h">practical_hours</label>
                    <input type="text"  name="practical_h" required>
                </div>
                <div class="form-group">
                    <label for="credits">credits</label>
                    <input type="text"  name="credits" required>
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

                
                
                <button class="button" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
  
    <!-- JavaScript Libraries -->
    <?php require 'includes/footer.php'; ?>
<?php
}
?>
