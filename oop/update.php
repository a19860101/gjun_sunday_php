<?php
    include("pdo.php");
    include("post.php");

    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $id = $_POST["id"];

    $post = new Post;
    $post->updatePost($title,$content,$c_id,$id);

    header("Location:index.php");
