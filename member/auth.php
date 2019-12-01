<?php
    session_start();
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
            $_SESSION["ID"] = $row["id"];
            $_SESSION["USER"] = $row["user"];
            $_SESSION["LEVEL"] = $row["level"];
            if($row["level"] == 0){
                echo "管理者";
            }else {
                echo "一般會員";
            }
            // header("location:index.php?login=success");

        }else{
            echo "帳號或密碼錯誤";
        }



    }catch(PDOException $e){
        echo $e->getMessage();
    }