<?php
    include("db.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $skills = implode(",",$_POST["skills"]);
    $id = $_POST["id"];

    $sql = "UPDATE students SET 
            name = '$name',
            email = '$email',
            edu = '$edu',
            gender = '$gender',
            skill = '$skills'
            WHERE id =".$id;
    
    mysqli_query($conn,$sql);
    header("location:index.php");