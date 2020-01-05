<?php
    include("pdo.php");
    include("post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $u_id = 2;

    $f = Post::coverName($_FILES["img"]);
    $filename =  $f["filename"];
    $ext =  $f["ext"];
    $tmpname =  $f["tmpname"];
    $error =  $f["error"];
    if(Post::cover($filename,$ext,$tmpname,$error) == 0){
        $post = new Post;
        $post->storePost($title,$filename,$content,$c_id,$u_id);
    }else{
        echo $error;
    }
    if($f == 4){
        $filename = "";
        $post = new Post;
        $post->storePost($title,$filename,$content,$c_id,$u_id);
    }
    header("location:index.php");
        // var_dump(Post::coverName($_FILES["img"]));
