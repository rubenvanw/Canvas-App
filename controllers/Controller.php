<?php
    class Controller{

        public function __construct()
        {
            // include "models/Canvas.php";
            // include "models/Comment.php";
        }

        public function index(){
            include "views/home.php";
        }

        public function overview(){

            $Canvas = new Canvas();
            $data = $Canvas->canvas_showAll();
            include "views/overview.php";
        }

        public function show($id){
            $Canvas = new Canvas();
            $data = $Canvas->show($id);
            $Comment = new Comment();
            $commentData = $Comment->comment_showAll($id);
            include "views/show.php";
        }


        public function delete($title, $delete_canvas_id){
            $Canvas = new Canvas();
            $Canvas->delete($title, $delete_canvas_id);
            header('Location: https://85748.ict-lab.nl/Minor%20Verdieping/expo?overview');
        }

        public function search($input){
            $Canvas = new Canvas();
            $data = $Canvas->search($input);
            include "views/search.php";
        }

        public function comment_store($canvas_id, $comment_content){
            require_once "models/Comment.php";
            $Comment = new Comment();
            $Comment->store($canvas_id, $comment_content);
        }

        public function loginpage(){
            include "views/loginpage.php";
        }

        public function login($username, $password){
            $Login = new Login();
            $Login->loginuser($username, $password);
            header("Location: https://85748.ict-lab.nl/Minor%20Verdieping/expo?loginpage");
        }

        public function logout(){
            Login::logoutuser();
            header("Location: https://85748.ict-lab.nl/Minor%20Verdieping/expo?loginpage");
        }

    }
?>