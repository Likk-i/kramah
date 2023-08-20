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
                <button type="submit" name="n">2.1 Student Enrolment and Profile</button>
            </form>
            <form method="POST" action="nba.php">
                <button type="submit" name="n">2.2 Catering to Student Diversity</button>
            </form>
            <form method="POST" action="one_three.php">
                <button type="submit" name="n">2.3 Teaching-Learning Process</button>
            </form>
        </div>
        <div class="button-container">
            <form method="POST" action="two_four.php">
                <button type="submit" name="n">2.4 Teacher Profile and Quality</button>
            </form>
            <form method="POST" action="nba.php">
                <button type="submit" name="n">2.5 Evaluation Process and Reforms</button>
            </form>
            <form method="POST" action="nba.php">
                <button type="submit" name="n">22.6 Student Performance and Learning Outcomes</button>
            </form>
            <form method="POST" action="nba.php">
                <button type="submit" name="n">2.7 Student Satisfaction Survey</button>
            </form>
        </div>
    </div>
</body>

</html>
