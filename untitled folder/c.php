<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <?php require 'includes/header.html'; ?>

    <style>
        .form-group {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 10px;
        }

        .form-group label {
            width: 100px;
            margin-right: 10px;
            flex-shrink: 0;
        }

        .form-group input {
            flex-grow: 1;
            padding: 5px;
        }
    </style>
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

                <!-- Add more form-group and input-group for other fields -->

                <button class="button" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <?php require 'includes/footer.php'; ?>
</body>
</html>
