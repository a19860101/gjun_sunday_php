<?php
    try{
        include('backend/pdo.php');
        unlink("images/".$_GET["img"]);
        $sql = "UPDATE posts SET img = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['',$_GET["id"]]);
        header("location:editPost.php?id=".$_GET["id"]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }