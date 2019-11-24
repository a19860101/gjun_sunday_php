<?php
    include("db.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $skills = implode(",",$_POST["skills"]);

    $sql = "INSERT INTO students(name,email,edu,gender,skill)VALUES('$name','$email','$edu','$gender','$skills')";
    mysqli_query($conn,$sql);

    header("location:index.php");