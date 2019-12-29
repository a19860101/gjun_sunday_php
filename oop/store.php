<?php
    include("pdo.php");
    include("post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $u_id = 2;
    $filename = "";
    $post = new Post;
    $post->storePost($title,$filename,$content,$c_id,$u_id);
    
    // header("location:index.php");