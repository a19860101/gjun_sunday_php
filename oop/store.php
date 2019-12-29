<?php
    include("pdo.php");
    include("post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $u_id = 2;
   
    // $filename = "";
    if(Post::cover($_FILES["img"]) == 0){
        echo "success";
        $coverName = Post::coverName($_FILES["img"]);
        $filename = $coverName["name"];
        
        $post = new Post;
        $post->storePost($title,$filename,$content,$c_id,$u_id);
    }else{
        echo Post::cover($_FILES["img"]);
        // echo "error";
    }
    
    header("location:index.php");
