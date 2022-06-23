<?php
if (isset($_POST["submit"])) {
    $canvas_id = $_POST["canvas_id"];
    $comment_content = $_POST["comment"];

    require_once "controllers/Controller.php";

    $controller = new Controller();

    $controller->comment_store($canvas_id, $comment_content);

    header("Location: https://85748.ict-lab.nl/Minor%20Verdieping/expo?show=" . $canvas_id );

} else {
    header("Location: https://85748.ict-lab.nl/Minor%20Verdieping/expo/");
}
