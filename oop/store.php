<?php
    include("pdo.php");
    include("post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $c_id = $_POST["c_id"];
    $u_id = 2;
   
    // $filename = "";
    // if(Post::cover($_FILES["img"]) == 0){
    //     echo "success";
    //     $coverName = Post::coverName($_FILES["img"]);
    //     $filename = $coverName["name"];
        
    //     $post = new Post;
    //     $post->storePost($title,$filename,$content,$c_id,$u_id);
    // }else{
    //     echo Post::cover($_FILES["img"]);
        
    // }
    $f = Post::coverName($_FILES["img"]);
    $filename =  $f["name"];
    $ext =  $f["ext"];
    $tmpname =  $f["tmp"];
    $error =  $f["error"];
    // var_dump($filename,$ext,$tmpname,$error);
    if(Post::cover($filename,$ext,$tmpname,$error) == 0){
        // echo "success";
        // echo $filename;
        $post = new Post;
        $post->storePost($title,$filename,$content,$c_id,$u_id);
    }else{
        echo Post::cover($_FILES["img"]);
        
    }
    // if(Post::coverName($_FILES["img"]) == 4){
    //     $filename = "";
    //     $post = new Post;
    //     $post->storePost($title,$filename,$content,$c_id,$u_id);
    // }
    // header("location:index.php");
