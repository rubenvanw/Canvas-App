<?php

require_once "controllers/Controller.php";
require_once "models/Canvas.php";
require_once "models/Comment.php";
require_once "models/Login.php";


$controller = new Controller();
session_start();

if (isset($_POST['login'])) {
    if (isset($_SESSION["token"]) && $_SESSION["token"] == $_POST["csrf_token"]) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $controller->login($username, $password);
    } else {

        $controller->loginpage();
    }
}

if (isset($_GET['overview'])) {
    $controller->overview();
} else if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $controller->show($id);
} else if (isset($_GET['delete'])) {
    // LOGIN REQUIRED
    if (isset($_SESSION["user"])) {
        $title = $_GET['delete'];
        $canvas_id = $GET['canvas_id'];
        $controller->delete($title, $canvas_id);
    } else {
        $controller->loginpage();
    }
} else if (isset($_GET['search'])) {
    $input = $_GET['search'];
    $controller->search($input);
} else if (isset($_GET['loginpage'])) {
    $controller->loginpage();
} else if (isset($_GET['logout'])) {
    // LOGIN REQUIRED
    if (isset($_SESSION["user"])) {
        $controller->logout();
    } else {
        $controller->loginpage();
    }
} else {
    $controller->index();
}
