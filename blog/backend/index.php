<?php
    include("../function.php");
    check_login_admin();
    $rows = showAllPosts();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>文章列表</h1>
        </div>
        <div class="col-12">
            <table class='table'>
                <tr>
                    <th>#</th>
                    <th>文章標題</th>
                    <th>作者</th>
                    <th>建立時間</th>
                    <th>最後修改時間</th>
                    <th></th>
                </tr>
                <?php foreach($rows as $row){ ?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["title"];?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["created_at"];?></td>
                    <td><?php echo $row["updated_at"];?></td>
                    <td>
                        <a href="deletePost.php?id=<?php echo $row["id"]; ?>&img=<?php echo $row["img"]?>" class="btn btn-danger" onclick="return confirm('確認刪除?');">刪除</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</div>
<?php include("template/footer.php"); ?>