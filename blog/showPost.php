<?php
    include("function.php");
    $id = $_GET["id"];
    $row = showPost($id);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2><?php echo $row["title"]; ?></h2>
            <div>作者：<?php echo $row["u_id"];?></div>
            <div>分類：<?php echo $row["c_id"];?></div>
            <div>
            
                <?php echo $row["content"];?>
            </div>
            <div>建立時間：<?php echo $row["created_at"];?></div>
            <div>更新時間：<?php echo $row["updated_at"];?></div>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>