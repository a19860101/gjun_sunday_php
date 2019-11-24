<?php
    include("db.php");
    include("function.php");
    $rows = showAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>學生資料</h1><div>
    <s></s></div>
    <div>
        <a href="create.php">新增資料</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>E-Mail</th>
            <th>教育程度</th>
            <th>性別</th>
            <th>技能</th>
            <th>動作</th>
        </tr>
        <?php foreach($rows as $row){ ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["edu"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["skill"];?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>