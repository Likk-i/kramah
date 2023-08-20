<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login Page</title>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <?php include 'includes/header.html'; ?>
    <?php include 'includes/nav.php'; ?>
    <style>
        .center-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Adjust the height as needed */
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .button-container button {
            margin-right: 10px; /* Add a margin between buttons */
        }
    </style>
</head>

<body>
    <div class="center-container">
        <div class="button-container">
            <form method="POST" action="1.php">
                <button type="submit" name="n">1.1*(U) -Curriculum Design and Development</button>
            </form>
            <form method="POST" action="nba.php">
                <button type="submit" name="n">1.1*(A) - Curriculum Planning and Implementation</button>
            </form>
            <form method="POST" action="one_three.php">
                <button type="submit" name="n">1.2 Academic Flexibility</button>
            </form>
        </div>
        <div class="button-container">
            <form method="POST" action="one_four.php">
                <button type="submit" name="n">1.3 Curriculum Enrichment</button>
            </form>
            <form method="POST" action="one_five.php">
                <button type="submit" name="n">1.4 Feedback System</button>
            </form>
        </div>
    </div>
</body>

</html>
