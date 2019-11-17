<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "sunday";
    
    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
    mysqli_query($conn,"SET NAMES utf8");

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    // var_dump($result);
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    echo $row["id"];
    echo $row["name"];
    echo $row["email"];
    echo $row["gender"];
    echo $row["edu"];
    echo $row["skill"];

    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    echo $row["id"];
    echo $row["name"];
    echo $row["email"];
    echo $row["gender"];
    echo $row["edu"];
    echo $row["skill"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>學生資料</h1>
</body>
</html>