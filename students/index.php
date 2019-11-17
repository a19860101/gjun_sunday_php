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
    <table>
    
    <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["edu"]."</td>";
            echo "<td>".$row["gender"]."</td>";
            echo "<td>".$row["skill"]."</td>";
            echo "</tr>";        
        }
    ?>
    </table>

</body>
</html>