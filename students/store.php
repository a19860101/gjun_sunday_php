<?php
    include("db.php");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $skills = implode(",",$_POST["skills"]);

    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $edu;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $skills;
    echo "<br>";