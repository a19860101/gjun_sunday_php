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

        if(!isset($_GET["page"])){
            $page = 1;//當前頁面
        }else{
            $page = $_GET["page"];
        }
  
        $start = ($page - 1) * $per;
        $sql = "SELECT * FROM posts LIMIT $start,$per";
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
        .active {
            font-size: 2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php echo $_SERVER["PHP_SELF"];?>
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
    <?php if($page != 1){?>
    <a href="<?php echo $_SERVER["PHP_SELF"];?>?page=1">首頁</a>
    <a href="<?php echo $_SERVER["PHP_SELF"];?>?page=<?php echo $page-1?>">上一頁</a>
    <?php } ?>
    <?php 
        // for($i=0;$i<$pages;$i++){
        //     $p = $i + 1;
        //     echo "<a href='index.php?page={$p}'>{$p}</a> ";
        // }
        for($i=0;$i<$pages;$i++){
            $p = $i + 1;
            if($p == $page){
                echo "<a href='{$_SERVER["PHP_SELF"]}?page={$p}' class='active'>{$p}</a> ";
            }else{
                echo "<a href='{$_SERVER["PHP_SELF"]}?page={$p}'>{$p}</a> ";
            }
        }
    ?>
    <?php if($page != $pages){ ?>
    <a href="<?php echo $_SERVER["PHP_SELF"];?>?page=<?php echo $page+1?>">下一頁</a>
    <a href="<?php echo $_SERVER["PHP_SELF"];?>?page=<?php echo $pages;?>">最末頁</a>
    <?php } ?>
    <div>目前頁面 : <?php echo $page; ?></div>
</body>
</html>