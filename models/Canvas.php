<?php

class Canvas
{
    public function canvas_showAll()
    {
        include "config/connect.php";
        $statement = $database->query("SELECT * FROM expo_canvas ORDER BY id DESC");
        $data = $statement->fetchAll();
        return $data;
    }

    public function show($id)
    {
        include "config/connect.php";
        $statement = $database->prepare("SELECT * FROM expo_canvas WHERE id=?");
        $statement->execute([$id]);
        $data = $statement->fetch();
        return $data;

        // SELECT expo_canvas.titel, expo_canvas.canvasWidth, expo_canvas.canvasHeight, expo_canvas_comment.canvas_id, expo_canvas_comment.comment_content, expo_canvas_comment.comment_datetime FROM expo_canvas INNER JOIN expo_canvas_comment ON expo_canvas.id=expo_canvas_comment.canvas_id WHERE expo_canvas.id = ?;
    }

    public function delete($title, $canvas_id)
    {
        include "config/connect.php";
        $statement = $database->prepare("DELETE FROM expo_canvas WHERE titel=?");
        $statement->execute([$title]);

        $statement = $database->prepare("DELETE FROM expo_canvas_comment WHERE canvas_id=?");
        $statement->execute([$canvas_id]);

        unlink("img/{$title}.jpg");
    }

    public function search($input)
    {
        include "config/connect.php";
        $pattern = '%' . $input . '%';
        $statement = $database->prepare("SELECT * FROM expo_canvas WHERE titel LIKE ? ");
        $statement->execute([$pattern]);
        $data = $statement->fetchAll();
        
        return $data;
    }
}
