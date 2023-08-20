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
            <form method="POST" action="one.php">
                <button type="submit" name="n">Curricular Aspects</button>
            </form>
            <form method="POST" action="two.php">
                <button type="submit" name="n">Teaching-Learning and Evaluation</button>
            </form>
            <form method="POST" action="nba.php">
                <button type="submit" name="n">Research, Innovations and Extension</button>
            </form>
        </div>
        <div class="button-container">
            <form method="POST" action="nba.php">
                <button type="submit" name="n">Infrastructure and Learning Resources</button>
            </form>
            <form method="POST" action="nba.php">
                <button type="submit" name="n">Student Support and Progression</button>
            </form>
            <form method="POST" action="nba.php">
                <button type="submit" name="n">Governance, Leadership and Management</button>
            </form>
        </div>
        <div class="button-container">
            <form method="POST" action="nba.php">
                <button type="submit" name="n">Institutional Values and Best Practices</button>
            </form>
        </div>
    </div>
</body>

</html>
