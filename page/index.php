<?php
    try {
        include("pdo.php");
        $sql = "SELECT * FROM posts";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $total = $stmt->rowCount();
        $per = 3;
        $pages = ceil($total / $per);
        //ceil 無條件進位
        //floor 無條件捨去
        //round 四捨五入

        $sql = "SELECT * FROM posts LIMIT 6,3";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $rows = array();
        while($row = $stmt->fetch()){
            $rows[] = $row;
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin:0;
            padding:0;
            font-family: "Microsoft Jhenghei"
        }
        table {
            margin: auto;
        }
        table,td,th {
            border: 1px solid #222;
            padding: 10px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div>
        資料總筆數：<?php echo $total; ?>
    </div>
    <table>
        <?php foreach($rows as $row){ ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["title"];?></td>
                <td><?php echo $row["c_id"];?></td>
                <td><?php echo $row["created_at"];?></td>
                <td><?php echo $row["updated_at"];?></td>
            </tr>
        <?php } ?>
    </table>
    <a href="#">首頁</a>
    <a href="#">上一頁</a>
    <a href="#">下一頁</a>
    <a href="#">最末頁</a>

</body>
</html>