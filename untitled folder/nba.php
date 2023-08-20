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
        height: 100vh;
    }

    .button-container {
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    }

    .button-container button {
        margin-right: 10px;
    }

    /* Additional CSS for the buttons in the third line */
    .button-container:nth-child(3) {
        margin-bottom: 0;
    }
</style>


</head>

<body>
    <div class="center-container">
    <div class="button-container">
        <form method="POST" action="one.php">
            <button type="submit" name="n">Vision, Mission and Program Educational Objectives</button>
        </form>
        <form method="POST" action="edit10.php">
            <button type="submit" name="n">Program Curriculum and Teaching – Learning Processes</button>
        </form>
        <form method="POST" action="nba.php">
            <button type="submit" name="n">Course Outcomes and Program Outcomes</button>
        </form>
    </div>
    <div class="button-container">
        <form method="POST" action="nba.php">
            <button type="submit" name="n">Students’ Performance</button>
        </form>
        <form method="POST" action="five.php">
            <button type="submit" name="n">Faculty Information and Contributions</button>
        </form>
        <form method="POST" action="nba.php">
            <button type="submit" name="n">Facilities and Technical Support</button>
        </form>
    </div>
    <div class="button-container inline"> <!-- Added the 'inline' class here -->
        <form method="POST" action="nba.php">
            <button type="submit" name="n">Continuous Improvement</button>
        </form>
        <form method="POST" action="nba.php">
            <button type="submit" name="n">First Year Academics</button>
        </form>
        <form method="POST" action="bnine.php">
            <button type="submit" name="n">Student Support Systems</button>
        </form>
    </div>
    <div class="button-container">
        <form method="POST" action="nba.php">
            <button type="submit" name="n">Governance, Institutional Support and Financial Resources</button>
        </form>
    </div>
</div>

</div>

</body>

</html>
