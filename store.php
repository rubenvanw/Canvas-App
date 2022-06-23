<?php
if (isset($_POST["data"])) {
    // echo $_POST["data"][0] . "\n";
    // echo $_POST["data"][1] . "\n";
    // echo $_POST["data"][2] . "\n";

    include "config/connect.php";

    $titel = $_POST["data"][0];
    $dataURL = $_POST["data"][1];
    $canvasWidth = $_POST["data"][2];
    $canvasHeight = $_POST["data"][3];

    $stmt = $database->query("SELECT * FROM expo_canvas ORDER BY id DESC LIMIT 1");
    $lastId = $stmt->fetch();
    $lastId["id"]++;
    $lastIdString = strval($lastId["id"]);

    $uniqueTitle = $titel . $lastIdString;


    // https://usefulangle.com/post/353/javascript-canvas-image-upload
    list($type, $data) = explode(';', $dataURL);
    list(, $data)      = explode(',', $data);
    $data = base64_decode($data);

    $image = imagecreate($canvasWidth, $canvasHeight);
    file_put_contents("img/" . $uniqueTitle .  ".jpg", $image);
    file_put_contents("img/" . $uniqueTitle . ".jpg", $data);

    $sql = "INSERT INTO expo_canvas (titel, canvasWidth, canvasHeight) VALUES (?, ?, ?)";
    $statement = $database->prepare($sql);
    $statement->execute([$uniqueTitle, $canvasWidth, $canvasHeight]);

    if ($statement) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    header("Location: https://85748.ict-lab.nl/Minor%20Verdieping/expo/");
}
