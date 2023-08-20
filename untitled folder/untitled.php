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
            <form method="POST" action="b.php">

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
                    <label for="degree">degree</label>
                    <input type="text" name="degree" required>
                </div>
                <div class="form-group">
                    <label for="university">university</label>
                    <input type="text" id="university" name="university" required>
                </div>
                

                <div class="form-group">
                    <label for="year_of_attaining_higher_qualification">year_of_attaining_higher_qualification</label>
                    <input type="text" name="year_of_attaining_higher_qualification" required>
                </div>
                <div class="form-group">
                    <label for="association_with_institute">association_with_institute</label>
                    <input type="text" name="association_with_institute" required>
                </div>
                <div class="form-group">
                    <label for="designation">designation</label>
                    <input type="text" name="designation" required>
                </div>
                <div class="form-group">
                    <label for="date_of_designation">date_of_designation</label>
                    <input type="text" name="date_of_designation" required>
                </div>
                <div class="form-group">
                    <label for="date_of_joining_institute">date_of_joining_institute</label>
                    <input type="text" name="date_of_joining_institute" required>
                </div>
                <div class="form-group">
                    <label for="department">department</label>
                    <input type="text" name="department" required>
                </div>
                <div class="form-group">
                    <label for="specialization">specialization</label>
                    <input type="text" name="specialization" required>
                </div>
                <div class="form-group">
                    <label for="phd_guidance">phd_guidance</label>
                    <input type="text" name="phd_guidance" required>
                </div>
                <div class="form-group">
                    <label for="faculty_receiving_phd">faculty_receiving_phd</label>
                    <input type="text" name="faculty_receiving_phd" required>
                </div>
                <div class="form-group">
                    <label for="currently_associated">currently_associated</label>
                    <input type="text" name="currently_associated" required>
                </div>
                <div class="form-group">
                    <label for="nature_of_association">nature_of_association</label>
                    <input type="text" name="nature_of_association" required>
                </div>
                <div class="form-group">
                    <label for="total_expereince">total_expereince</label>
                    <input type="text" name="total_expereince" required>
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
