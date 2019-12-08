<?php
    date_default_timezone_set("Asia/Taipei");
    // $currentD = date("Y-m-d H:i:s");
    function showAllPosts(){
        include("backend/pdo.php");
        $sql = "SELECT * FROM posts";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = array();
        while($row = $stmt->fetch()){
            $rows[] = $row;
        }
        return $rows;
    }
    function showPost($id){
        include("backend/pdo.php");
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }
    function storePost($title,$content,$c_id,$u_id){
        include("backend/pdo.php");
        // global $currentD;
        // $created_at = date("Y-m-d H:i:s");
        // $updated_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO posts(title,content,c_id,u_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title,$content,$c_id,$u_id,$currentD,$currentD]);
    }
    function updatePost($title,$content,$c_id,$id){
        
    }
    function deletePost($id){
        include("backend/pdo.php");
        $sql = "DELETE FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }