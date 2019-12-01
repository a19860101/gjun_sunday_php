<?php
    include("function.php");
    $rows = showAllPosts();
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>文章列表</h2>
        </div>
        <?php foreach($rows as $row){ ?>
        <div class="col-md-8">
            <h3><?php echo $row["title"];?></h3>
            <div>作者<?php echo $row["u_id"];?></div>
            <div>分類<?php echo $row["c_id"];?></div>
            <div>
                <?php echo $row["content"];?>
            </div>
            <div>建立時間:<?php echo $row["created_at"];?></div>
            <div>更新時間:<?php echo $row["updated_at"];?></div>
        </div>
        <?php } ?>
    </div>
</div>

<?php include("template/footer.php"); ?>

