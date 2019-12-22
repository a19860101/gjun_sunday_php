<?php 
    include("../function.php");
    try {
        include("pdo.php");
        $sql = "UPDATE users SET level = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        if($_GET["level"] == 0){
            $stmt->execute([1,$_GET["id"]]);
        }else{
            $stmt->execute([0,$_GET["id"]]);
        }
        header("location:memberList.php");

    }catch(PDOException $e){
        echo $e->getMessage();
    }