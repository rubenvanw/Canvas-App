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
        <h1>Overview</h1>
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
        <input class="search" id="search" type="text" name="search" placeholder="Search...">
        <div class="gallery">
            <?php
            foreach ($data as $row) {
                $title = trim($row["titel"], " 0..9");
                echo "<div class='gallery-item-wrapper'>";
                echo "<img class='gallery-item' src='img/" . $row["titel"] . ".jpg" . "'>";
                echo "<a href='https://85748.ict-lab.nl/Minor%20Verdieping/expo?show=" . $row["id"] . "'";
                if($title != ""){
                    echo "<span class='gallery-item-title'>" . $title .  "</span>";
                } else {
                    echo "<span class='gallery-item-title'>Canvas</span>";
                }
                echo "</a>";
                if (isset($_SESSION["user"])) {
                    echo "<a class='delete' href='https://85748.ict-lab.nl/Minor%20Verdieping/expo?delete={$row["titel"]}&canvas_id={$row["id"]}'>DELETE</a>";
                } else {
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <script src="scripts/search.js"></script>
</body>

</html>