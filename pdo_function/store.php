<?php
    include("function.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $skills = implode(",",$_POST["skills"]);
    $created_at = date("Y-m-d H:i:s");
    $updated_at = date("Y-m-d H:i:s"); 

    storeStudent($name,$email,$edu,$gender,$skills,$created_at,$updated_at);
    header("location:index.php");
