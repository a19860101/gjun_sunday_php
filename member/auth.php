<?php
    try {  
        include("pdo.php");
        $user = $_POST["user"];
        $pw = $_POST["pw"];
        
        if($user == "" || $pw == ""){
            header("location:index.php");
        }

        $sql = "SELECT * FROM members WHERE user = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch();

        if($row["pw"] == $pw){
            echo "已登入";

        }else{
            echo "帳號或密碼錯誤";
        }



    }catch(PDOException $e){
        echo $e->getMessage();
    }