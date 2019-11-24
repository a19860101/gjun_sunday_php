<?php
    include("db.php");
    include("function.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $skills = implode(",",$_POST["skills"]);
    $id = $_POST["id"];
    updateStudent($name,$email,$edu,$gender,$skills,$id);
    header("location:index.php");