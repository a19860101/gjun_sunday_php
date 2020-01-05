<?php
    include("pdo.php");
    include("post.php");

    $posts = new Post;
    // $rows =  $posts-r>showAllPosts();
    $rows = $posts->pagination(3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .active {
            font-size: 2em;
        }
    </style>
</head>
<body>
    <div>
        <a href="create.php">新增文章</a>
    </div>
    <table>
        <?php foreach($rows as $row){ ?>
        <tr>
            <td>
                <a href="detail.php?id=<?php echo $row["id"];?>"><?php echo $row["title"];?></a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row["id"];?>&img=<?php echo $row["img"]?>">刪除</a>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $row["id"];?>">編輯</a>
            </td>
        </tr>
        <?php } ?> 
    </table>
    <?php echo $posts->pager(); ?>
</body>
</html>