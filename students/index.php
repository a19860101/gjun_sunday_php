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
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>E-Mail</th>
            <th>教育程度</th>
            <th>性別</th>
            <th>技能</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["edu"];?></td>
            <td><?php echo $row["gender"];?></td>
            <td><?php echo $row["skill"];?></td>
        </tr>
        <?php } ?>


    <?php
        // while($row = mysqli_fetch_assoc($result)){
        //     echo "<tr>";
        //     echo "<td>".$row["id"]."</td>";
        //     echo "<td>".$row["name"]."</td>";
        //     echo "<td>".$row["email"]."</td>";
        //     echo "<td>".$row["edu"]."</td>";
        //     echo "<td>".$row["gender"]."</td>";
        //     echo "<td>".$row["skill"]."</td>";
        //     echo "</tr>";        
        // }
    ?>
    </table>

</body>
</html>