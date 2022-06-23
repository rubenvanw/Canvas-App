<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expo</title>
    <link rel="stylesheet" href="https://85748.ict-lab.nl/Minor%20Verdieping/expo/css/overview.css">
    <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <div class="links">
            <a href="https://85748.ict-lab.nl/Minor%20Verdieping/expo">Canvas</a>
            <a href="https://85748.ict-lab.nl/Minor%20Verdieping/expo?overview">Overview</a>
            <?php
            if (isset($_SESSION["user"])) {
                echo "<a href='https://85748.ict-lab.nl/Minor%20Verdieping/expo?loginpage'>Logout</a>";
            } else {
                echo "<a href='https://85748.ict-lab.nl/Minor%20Verdieping/expo?loginpage'>Login</a>";
            }
            ?>
        </div>
        <div class="login-container">
        <?php
            if (isset($_SESSION["user"])) {
                include "views/templates/template_logout.php";
            } else {
                include "views/templates/template_login.php";
            }
            ?>
        </div>
    </div>
    <script src="scripts/search.js"></script>
</body>

</html>