<?php

class Login
{
    public function loginuser($username, $password)
    {
        include "config/connect.php";

        $statement = $database->prepare("SELECT * FROM expo_canvas_user WHERE username=? AND password = ?");
        $statement->execute([$username, sha1($password)]);
        $data = $statement->fetch();

        if ($data) {
            session_start();
            $_SESSION["user"] = $username;
            return "Login success!";
        } else {
            return "Login failed! Incorrect username or password.";
        }
    }

    public static function logoutuser(){
        session_start();
        if($_SESSION["user"]){
            session_destroy();
        }
    }
}
