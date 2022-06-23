<?php

class Comment
{
    public function comment_showAll($comment_id)
    {
        include "config/connect.php";
        // $statement = $database->query("SELECT * FROM expo_canvas_comment");
        // $commentData = $statement->fetchAll();
        $statement = $database->prepare("SELECT * FROM expo_canvas_comment WHERE canvas_id=?");
        $statement->execute([$comment_id]);
        $commentData = $statement->fetchAll();
        return $commentData;
    }

    public function store($canvas_id, $comment_content)
    {
        $comment_datetime = date('Y-m-d H:i:s');
        include "config/connect.php";
        $sql = "INSERT INTO expo_canvas_comment (canvas_id, comment_content, comment_datetime) VALUES (?,?,?)";
        $statement = $database->prepare($sql);
        $statement->execute([$canvas_id, $comment_content, $comment_datetime]);
    }
}
