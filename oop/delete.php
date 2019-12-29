<?php
    include("pdo.php");
    include("post.php");
    $img = "images/".$_GET["img"];
    $post = new Post;
    $post->deletePost($_GET["id"],$img);
    header("location: index.php");