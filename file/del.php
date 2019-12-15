<?php
    try{
        include("pdo.php");
        $name = $_GET["name"];
        unlink("images/{$name}");
        $sql = "DELETE FROM files WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_GET["id"]]);
        header("location:index.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }