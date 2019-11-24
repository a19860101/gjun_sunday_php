<?php
    try{
        include("pdo.php");
        $name = $_POST["name"];
        $email = $_POST["email"];
        $edu = $_POST["edu"];
        $gender = $_POST["gender"];
        $skills = implode(",",$_POST["skills"]);
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");;

        $sql = "INSERT INTO students(name,email,edu,gender,skill,created_at,updated_at)VALUES(?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$email,$edu,$gender,$skills,$created_at,$updated_at]);
        
        header("location:index.php");

    }catch(PDOException $e){
        echo $e->getMessage();
    }
    